<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard'; // Changed from '/home' to '/dashboard'

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        // Update the redirect logic
        RedirectIfAuthenticated::redirectUsing(function ($request) {
            if ($request->user()->isAdmin()) {
                return route('admin.dashboard');
            } elseif ($request->user()->isCaregiver()) {
                return route('caregiver.dashboard');
            }
            return route('user.dashboard');
        });
    }

    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}