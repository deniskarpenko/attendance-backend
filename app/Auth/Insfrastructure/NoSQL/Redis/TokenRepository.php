<?php
declare(strict_types=1);

namespace App\Auth\Insfrastructure\NoSQL\Redis;

use App\Auth\Domain\Token;
use App\Auth\Domain\TokenRepositoryInterface;
use Illuminate\Support\Facades\Redis;

class TokenRepository implements TokenRepositoryInterface
{
    const USER_PREFIX = 'user:';

    public function store(Token $token): void
    {
        Redis::set(self::USER_PREFIX . $token->userId, $token->token, 'EX', $token->expiresAt);
    }

    public function getToken(int $userId): ?string
    {
        return Redis::get(self::USER_PREFIX . $userId);
    }

    public function delete(int $userId): void
    {
        Redis::del(self::USER_PREFIX . $userId);
    }
}
