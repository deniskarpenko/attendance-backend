<?php
declare(strict_types=1);

namespace App\Auth\Domain;

use App\Auth\Domain\ValueObjects\Email;

interface UserRepositoryInterface
{
    public function createUser(Email $email, string $name, string $password): User;

    public function getUserByEmail(Email $email): ?User;
}
