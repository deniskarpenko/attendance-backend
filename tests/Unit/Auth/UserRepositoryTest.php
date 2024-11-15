<?php
declare(strict_types=1);
use App\Auth\Domain\User;
use App\Auth\Domain\ValueObjects\Email;
use App\Auth\Insfrastructure\Persistence\Eloquent\UserRepository;
uses(\Illuminate\Foundation\Testing\WithFaker::class);

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

uses(\Tests\TestCase::class);

beforeEach(function () {
    $this->setUpFaker();
});

test('create user', function () {
    $email = new Email($this->faker->email());

    $name = $this->faker->name();

    $password = $this->faker->password();

    $userRepository = new UserRepository();

    $user = $userRepository->createUser($email, $name,$password);

    $this->assertDatabaseHas('users', [
        'email' => (string) $email,
        'name' =>  $name,
    ]);
});
test('get user by email', function () {
    /**
     * @var User $user
     */
    $user = User::factory()->create();

    $repository = new UserRepository();

    $userFromRepository = $repository->getUserByEmail(new Email($user->email));

    expect($userFromRepository->id)->toEqual($user->id);
});
