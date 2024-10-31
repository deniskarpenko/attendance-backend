<?php
declare(strict_types=1);

namespace App\Auth\Insfrastructure\Persistence\Eloquent;

use App\Auth\Domain\User;
use App\Auth\Domain\UserRepositoryInterface;
use App\Auth\Domain\ValueObjects\Email;

class UserRepository implements UserRepositoryInterface
{
    public function createUser(Email $email, string $name, string $password): User
    {
        $user = new User();
        $user->email = (string) $email;
        $user->name = $name;
        $user->password = password_hash($password, PASSWORD_DEFAULT);

        $user->save();

        return $user;
    }

    public function getUserByEmail(Email $email): ?User
    {
        return User::where('email', $email)->first();
    }
}
