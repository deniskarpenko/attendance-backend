<?php
declare(strict_types=1);

namespace App\Auth\Domain;

use App\Auth\Domain\ValueObjects\Email;

interface UserRepositoryInterface
{
    public function createUser(Email $email, string $name): User;
    public function findUserByEmail(Email $email): User;
}
