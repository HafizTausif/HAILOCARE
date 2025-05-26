<?php

// app/Http/Middleware/CaregiverMiddleware.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class CaregiverMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (!Auth::user()->isCaregiver()) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}