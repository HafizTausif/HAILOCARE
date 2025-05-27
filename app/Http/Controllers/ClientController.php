<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        if ($request->filled('health_conditions') && is_string($request->health_conditions)) {
            $request->merge([
                'health_conditions' => json_decode($request->health_conditions, true),
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'password' => 'required|string|min:8|confirmed',
            'relationship_to_profile' => 'nullable|string',
            'health_conditions' => 'nullable|array',
            'health_conditions.*' => 'string|max:255',
            'special_requirements' => 'nullable|string',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profilePicturePath = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'date_of_birth' => $validated['date_of_birth'],
            'gender' => $validated['gender'],
            'password' => bcrypt($validated['password']),
            'role_id' => Role::USER,
            'profile_picture' => $profilePicturePath,
        ]);

        $user->client()->create([
            'relationship_to_profile' => $validated['relationship_to_profile'] ?? null,
            'health_conditions' => $validated['health_conditions'] ?? [],
            'special_requirements' => $validated['special_requirements'] ?? null,
        ]);

        return redirect()->route('login')
               ->with('success', 'Client account created successfully! Please login.');
    }
}