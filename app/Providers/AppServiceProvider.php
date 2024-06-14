<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // HexagonalService::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        RateLimiter::for('startAsyncAction', function (Request $request) {
//            return Limit::perMinute(1)->by($request->path());
//            // return $request->is('*/status/*') ? Limit::perMinute(1)->by($request->path()) : Limit::none();
//        });
    }
}
