<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Caregiver;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CaregiverController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'password' => 'required|string|min:8|confirmed',
            'social_security' => 'nullable|string',
            'driver_license_front' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'driver_license_back' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'car_brand' => 'nullable|string',
            'car_model' => 'nullable|string',
            'car_plate_number' => 'nullable|string',
            'home_care_aid_number' => 'nullable|string',
            'certifications' => 'nullable|array',
            'certifications.*' => 'string|max:255',
            'languages_spoken' => 'nullable|array',
            'languages_spoken.*' => 'string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'date_of_birth' => $validatedData['date_of_birth'],
                'gender' => $validatedData['gender'],
                'password' => bcrypt($validatedData['password']),
                'role_id' => Role::CAREGIVER,
            ]);

            $caregiverData = [
                'social_security' => $validatedData['social_security'],
                'car_brand' => $validatedData['car_brand'],
                'car_model' => $validatedData['car_model'],
                'car_plate_number' => $validatedData['car_plate_number'],
                'home_care_aid_number' => $validatedData['home_care_aid_number'],
                'certifications' => array_filter($validatedData['certifications'] ?? []),
                'languages_spoken' => array_filter($validatedData['languages_spoken'] ?? []),
            ];

            if ($request->hasFile('driver_license_front')) {
                $caregiverData['driver_license_front'] = $request->file('driver_license_front')
                    ->store('caregivers/documents', 'public');
            }

            if ($request->hasFile('driver_license_back')) {
                $caregiverData['driver_license_back'] = $request->file('driver_license_back')
                    ->store('caregivers/documents', 'public');
            }

            if ($request->hasFile('profile_picture')) {
                $caregiverData['profile_picture'] = $request->file('profile_picture')
                    ->store('caregivers/profile', 'public');
            }

            $user->caregiver()->create($caregiverData);

            DB::commit();

            return redirect()->route('login')
                   ->with('success', 'Caregiver account created successfully! Please login.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()
                   ->with('error', 'Error creating account: ' . $e->getMessage());
        }
    }
}