<?php
declare(strict_types=1);

use App\Auth\Domain\User;

uses(\Illuminate\Foundation\Testing\WithFaker::class);

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);


test('login user correct', function () {
    /**
     * @var User $user
     */
    $user = User::factory()->create();
    $email = $user->email;
    $password = $user->password;

    $response = $this->json('POST', 'auth/login', [
        'email' => $email,
        'password' => $password,
    ]);
    $results = $response->json('data');

    dd($response->content());

    expect(true)->toBeTrue();
});
