<?php
// app/Http/Controllers/Admin/CaregiverController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caregiver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CaregiverController extends Controller
{
    public function index()
    {
        $caregivers = Caregiver::with('user')->paginate(10);
        return view('admin.caregivers.index', compact('caregivers'));
    }

    public function create()
    {
        return view('admin.caregivers.create');
    }

   public function store(Request $request)
{
    // Validate the request data
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

    // Begin database transaction
    DB::beginTransaction();

    try {
        // Create the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'gender' => $validatedData['gender'],
            'password' => bcrypt($validatedData['password']),
            'role_id' => 2, // Caregiver role
        ]);

        // Prepare caregiver data
        $caregiverData = [
            'social_security' => $validatedData['social_security'],
            'car_brand' => $validatedData['car_brand'],
            'car_model' => $validatedData['car_model'],
            'car_plate_number' => $validatedData['car_plate_number'],
            'home_care_aid_number' => $validatedData['home_care_aid_number'],
            'certifications' => array_filter($validatedData['certifications'] ?? []),
            'languages_spoken' => array_filter($validatedData['languages_spoken'] ?? []),
        ];

        // Handle file uploads
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

        // Create caregiver profile
        $user->caregiver()->create($caregiverData);

        // Commit the transaction
        DB::commit();

        return redirect()->route('admin.caregivers.index')
            ->with('success', 'Caregiver created successfully.');

    } catch (\Exception $e) {
        // Rollback the transaction on error
        DB::rollBack();
        
        return back()->withInput()
            ->with('error', 'Error creating caregiver: ' . $e->getMessage());
    }
}
    public function show(Caregiver $caregiver)
    {
        return view('admin.caregivers.show', compact('caregiver'));
    }

    public function edit(Caregiver $caregiver)
    {
        return view('admin.caregivers.edit', compact('caregiver'));
    }

    public function update(Request $request, Caregiver $caregiver)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $caregiver->user_id,
        'phone' => 'required|string|max:20',
        'date_of_birth' => 'required|date',
        'gender' => 'required|in:male,female,other',
        'password' => 'nullable|string|min:8|confirmed',
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

    // Begin database transaction
    DB::beginTransaction();

    try {
        // Prepare user data
        $userData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'date_of_birth' => $validatedData['date_of_birth'],
            'gender' => $validatedData['gender'],
        ];

        // Update password if provided
        if (!empty($validatedData['password'])) {
            $userData['password'] = bcrypt($validatedData['password']);
        }

        // Update user
        $caregiver->user->update($userData);

        // Prepare caregiver data
        $caregiverData = [
            'social_security' => $validatedData['social_security'],
            'car_brand' => $validatedData['car_brand'],
            'car_model' => $validatedData['car_model'],
            'car_plate_number' => $validatedData['car_plate_number'],
            'home_care_aid_number' => $validatedData['home_care_aid_number'],
            'certifications' => array_filter($validatedData['certifications'] ?? []),
            'languages_spoken' => array_filter($validatedData['languages_spoken'] ?? []),
        ];

        // Handle file uploads
        if ($request->hasFile('driver_license_front')) {
            // Delete old file if exists
            if ($caregiver->driver_license_front) {
                Storage::disk('public')->delete($caregiver->driver_license_front);
            }
            $caregiverData['driver_license_front'] = $request->file('driver_license_front')
                ->store('caregivers/documents', 'public');
        }

        if ($request->hasFile('driver_license_back')) {
            // Delete old file if exists
            if ($caregiver->driver_license_back) {
                Storage::disk('public')->delete($caregiver->driver_license_back);
            }
            $caregiverData['driver_license_back'] = $request->file('driver_license_back')
                ->store('caregivers/documents', 'public');
        }

        if ($request->hasFile('profile_picture')) {
            // Delete old file if exists
            if ($caregiver->profile_picture) {
                Storage::disk('public')->delete($caregiver->profile_picture);
            }
            $caregiverData['profile_picture'] = $request->file('profile_picture')
                ->store('caregivers/profile', 'public');
        }

        // Update caregiver
        $caregiver->update($caregiverData);

        // Commit the transaction
        DB::commit();

        return redirect()->route('admin.caregivers.index')
            ->with('success', 'Caregiver updated successfully.');

    } catch (\Exception $e) {
        // Rollback the transaction on error
        DB::rollBack();
        
        return back()->withInput()
            ->with('error', 'Error updating caregiver: ' . $e->getMessage());
    }
}

    public function destroy(Caregiver $caregiver)
    {
        // Delete files if they exist
        if ($caregiver->driver_license_front) {
            Storage::disk('public')->delete($caregiver->driver_license_front);
        }
        if ($caregiver->driver_license_back) {
            Storage::disk('public')->delete($caregiver->driver_license_back);
        }
        if ($caregiver->profile_picture) {
            Storage::disk('public')->delete($caregiver->profile_picture);
        }

        // Delete caregiver and user
        $caregiver->user->delete();
        $caregiver->delete();

        return redirect()->route('admin.caregivers.index')->with('success', 'Caregiver deleted successfully.');
    }
}