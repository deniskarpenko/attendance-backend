<?php
declare(strict_types=1);

namespace App\Auth\Domain;

use App\Auth\Domain\ValueObjects\Email;

interface UserRepositoryInterface
{
    public function findOrCreateUserByEmail(Email $email, string $name);
    public function findUserByEmail($email);
}
