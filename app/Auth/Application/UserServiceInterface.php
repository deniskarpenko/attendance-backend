<?php
declare(strict_types=1);

namespace App\Auth\Application;

use App\Auth\Application\DTO\LoginData;

interface UserServiceInterface
{
    public function login(LoginData $loginData): bool;
}
