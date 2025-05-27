<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caregiver;
use App\Models\Client;
use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{
   public function dashboard()
{
    // Count statistics
    $caregiverCount = Caregiver::count();
    $clientCount = Client::count();
    
    // Get all caregivers (without rating sorting)
    $caregivers = User::where('role_id', Role::CAREGIVER)
        ->with('caregiver')
        ->take(8) // Limit to 8
        ->get();
        
    // Get recent clients
    $recentClients = Client::with('user')
        ->orderByDesc('created_at')
        ->take(6)
        ->get();

    return view('admin.dashboard.index', [
        'caregiverCount' => $caregiverCount,
        'Clientcount' => $clientCount,
        'caregivers' => $caregivers, // Changed variable name from topCaregivers
        'recentClients' => $recentClients
    ]);
}
}