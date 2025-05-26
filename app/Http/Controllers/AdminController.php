<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caregiver; // Add this line

class AdminController extends Controller
{
    public function dashboard()
    {
        $caregiverCount = Caregiver::count(); // Get total number of caregivers
        
        return view('admin.dashboard.index', [
            'caregiverCount' => $caregiverCount
        ]);
    }
}