<?php
declare(strict_types=1);

namespace App\Auth\Application;

use App\Auth\Application\DTO\LoginData;
use App\Auth\Application\UserServiceInterface;
use App\Auth\Domain\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    )
    {

    }
    public function login(LoginData $loginData): bool
    {
        // TODO: Implement login() method.
    }
}
