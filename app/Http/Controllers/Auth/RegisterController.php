<?php

// app/Http/Controllers/Auth/RegisterController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Caregiver;
use App\Models\Client;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Role;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'role' => ['required', 'in:caregiver,user'],
            'terms' => ['accepted'],
        ]);

        // Common user data
        $userData = [
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'role_id' => $request->role === 'caregiver' ? Role::CAREGIVER : Role::USER,
        ];

        // Create the user
        $user = User::create($userData);

        // Handle role-specific data
        if ($request->role === 'caregiver') {
            $request->validate([
                'social_security' => ['required', 'string'],
                'driver_license' => ['required', 'file'],
                'car_brand' => ['nullable', 'string'],
                'car_model' => ['nullable', 'string'],
                'car_plate_number' => ['nullable', 'string'],
                'home_care_aid_number' => ['nullable', 'string'],
                'certifications' => ['nullable', 'file'],
                'languages_spoken' => ['nullable', 'array'],
                'profile_picture' => ['nullable', 'file'],
            ]);

            // Handle file uploads
            $driverLicensePath = $request->file('driver_license')->store('driver_licenses');
            $certificationsPath = $request->file('certifications') ? $request->file('certifications')->store('certifications') : null;
            $profilePicturePath = $request->file('profile_picture') ? $request->file('profile_picture')->store('profile_pictures') : null;

            Caregiver::create([
                'user_id' => $user->id,
                'social_security' => $request->social_security,
                'driver_license_front' => $driverLicensePath,
                'driver_license_back' => null, // You might need separate fields for front/back
                'car_brand' => $request->car_brand,
                'car_model' => $request->car_model,
                'car_plate_number' => $request->car_plate_number,
                'home_care_aid_number' => $request->home_care_aid_number,
                'certifications' => $certificationsPath,
                'languages_spoken' => $request->languages_spoken,
                'profile_picture' => $profilePicturePath,
            ]);
        } else {
            $request->validate([
                'relationship_to_profile' => ['required', 'string'],
                'health_conditions' => ['nullable', 'array'],
            ]);

            Client::create([
                'user_id' => $user->id,
                'relationship_to_profile' => $request->relationship_to_profile,
                'health_conditions' => $request->health_conditions,
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}