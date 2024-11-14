<?php
declare(strict_types=1);

namespace App\Auth\Domain;

use Illuminate\Support\Carbon;

final readonly class Token
{
    public function __construct(
        public int $userId,
        public string $token,
        public Carbon $expiresAt
    ){}
}
