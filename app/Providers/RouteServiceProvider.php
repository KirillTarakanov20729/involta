<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {

        $this->routes(function () {

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('admin')
                ->prefix('admin')
                ->name('admin.')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */

}