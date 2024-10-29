<?php
declare(strict_types=1);

namespace App\Auth\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class AuthRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware(['auth:sanctum'])
                ->prefix('auth')
                ->group(base_path('Auth/Routes/auth.php'));
        });
    }
}
