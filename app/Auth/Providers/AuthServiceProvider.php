<?php
declare(strict_types=1);

namespace App\Auth\Providers;

use App\Auth\Domain\UserRepositoryInterface;
use App\Auth\Insfrastructure\Persistence\Eloquent\UserRepository;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}