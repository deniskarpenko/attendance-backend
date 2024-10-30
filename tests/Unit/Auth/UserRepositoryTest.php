<?php
declare(strict_types=1);

namespace Auth;

use App\Auth\Domain\User;
use App\Auth\Insfrastructure\Persistence\Eloquent\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testCreateUser(): void
    {
        $user = User::fac
        $userRepository = new UserRepository();
        //$user = $userRepository->createUser();
        $this->assertTrue(true);
    }
}
