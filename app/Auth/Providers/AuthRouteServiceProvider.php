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
            Route::middleware([])
                ->prefix('auth')
                ->group(__DIR__ . '/../routes/auth.php');
        });
    }
}
