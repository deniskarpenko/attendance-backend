<?php
declare(strict_types=1);

namespace App\Auth\Application;

use App\Auth\Application\DTO\LoginData;
use App\Auth\Domain\UserRepositoryInterface;
use App\Auth\Domain\ValueObjects\Email;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Translation\Exception\NotFoundResourceException;
use Illuminate\Validation\ValidationException;

class UserService implements UserServiceInterface
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    )
    {

    }

    /**
     * @param LoginData $loginData
     * @return bool
     * @throws ValidationException
     * @throws \App\Auth\Domain\Exceptions\InvalidValueObjectValueException
     */
    public function login(LoginData $loginData): bool
    {
        $user = $this->userRepository->getUserByEmail(new Email($loginData->email));

        if (!$user) {
            throw new NotFoundResourceException('User not found');
        }

        if (!Hash::check($loginData->password, $user->password)) {
            throw ValidationException::withMessages(['email' => 'The provided credentials are incorrect.']);
        }
    }
}
