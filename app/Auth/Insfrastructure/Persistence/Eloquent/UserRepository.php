<?php
declare(strict_types=1);

namespace App\Auth\Insfrastructure\Persistence\Eloquent;

use App\Auth\Domain\User;
use App\Auth\Domain\UserRepositoryInterface;
use App\Auth\Domain\ValueObjects\Email;

class UserRepository implements UserRepositoryInterface
{

    public function findOrCreateUserByEmail(Email $email, string $name): User
    {
        // TODO: Implement findOrCreateUserByEmail() method.
    }

    public function findUserByEmail($email): User
    {
        // TODO: Implement findUserByEmail() method.
    }
}
