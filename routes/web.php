<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CaregiverController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Public routes grouped by controller
Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/service', 'service')->name('service');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/work', 'work')->name('work');
    Route::get('/caregiver', 'caregiver')->name('caregiver');
});

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Dashboard redirect
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return auth()->user()->isAdmin() 
            ? redirect()->route('admin.dashboard')
            : (auth()->user()->isCaregiver() 
                ? redirect()->route('caregiver.dashboard') 
                : redirect()->route('user.dashboard'));
    })->name('dashboard');
});

// Role-specific routes
Route::prefix('user')
    ->middleware(['auth', 'user'])
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])
            ->name('user.dashboard');
        // Add more user routes as needed
    });

// Caregiver Routes
Route::prefix('caregiver')
    ->middleware(['auth', 'caregiver'])
    ->group(function () {
        Route::get('/dashboard', [CaregiverController::class, 'dashboard'])
            ->name('caregiver.dashboard');
        // Add more caregiver routes as needed
    });

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('admin.dashboard');

        // Caregivers routes with consistent naming
        Route::prefix('caregivers')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\CaregiverController::class, 'index'])->name('admin.caregivers.index');
            Route::get('/create', [\App\Http\Controllers\Admin\CaregiverController::class, 'create'])->name('admin.caregivers.create');
            Route::post('/', [\App\Http\Controllers\Admin\CaregiverController::class, 'store'])->name('admin.caregivers.store');
            Route::get('/{caregiver}', [\App\Http\Controllers\Admin\CaregiverController::class, 'show'])->name('admin.caregivers.show');
            Route::get('/{caregiver}/edit', [\App\Http\Controllers\Admin\CaregiverController::class, 'edit'])->name('admin.caregivers.edit');
            Route::put('/{caregiver}', [\App\Http\Controllers\Admin\CaregiverController::class, 'update'])->name('admin.caregivers.update');
            Route::delete('/{caregiver}', [\App\Http\Controllers\Admin\CaregiverController::class, 'destroy'])->name('admin.caregivers.destroy');
        });
    Route::prefix('clients')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ClientController::class, 'index'])->name('admin.clients.index');
            Route::get('/create', [\App\Http\Controllers\Admin\ClientController::class, 'create'])->name('admin.clients.create');
            Route::post('/', [\App\Http\Controllers\Admin\ClientController::class, 'store'])->name('admin.clients.store');
            Route::get('/{clients}', [\App\Http\Controllers\Admin\ClientController::class, 'show'])->name('admin.clients.show');
            Route::get('/{clients}/edit', [\App\Http\Controllers\Admin\ClientController::class, 'edit'])->name('admin.clients.edit');
            Route::put('/{clients}', [\App\Http\Controllers\Admin\ClientController::class, 'update'])->name('admin.clients.update');
            Route::delete('/{clients}', [\App\Http\Controllers\Admin\ClientController::class, 'destroy'])->name('admin.clients.destroy');
        });

        
        // Other admin routes...
    });