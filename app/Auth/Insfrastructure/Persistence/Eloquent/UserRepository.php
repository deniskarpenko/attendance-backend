<?php
declare(strict_types=1);

namespace App\Auth\Insfrastructure\Persistence\Eloquent;

use App\Auth\Domain\User;
use App\Auth\Domain\UserRepositoryInterface;
use App\Auth\Domain\ValueObjects\Email;

class UserRepository implements UserRepositoryInterface
{

    public function createUser(Email $email, string $name): User
    {

    }
    public function findUserByEmail(Email $email): User;
}
