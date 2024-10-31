<?php
declare(strict_types=1);

namespace Auth;

use App\Auth\Domain\User;
use App\Auth\Domain\ValueObjects\Email;
use App\Auth\Insfrastructure\Persistence\Eloquent\UserRepository;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    use WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->setUpFaker();
    }

    /**
     * @return void
     * @throws \App\Auth\Domain\Exceptions\InvalidValueObjectValueException
     */
    public function testCreateUser(): void
    {
        $email = new Email($this->faker->email());

        $name = $this->faker->name();

        $password = $this->faker->password();

        $userRepository = new UserRepository();

        $user = $userRepository->createUser($email, $password, $name);
        $this->assertTrue(true);
    }
}
