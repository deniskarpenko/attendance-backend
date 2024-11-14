<?php
declare(strict_types=1);

namespace App\Auth\Domain;

interface TokenRepositoryInterface
{
    public function store(Token $token): void;

    public function getToken(int $userId): ?string;

    public function delete(int $userId): void;
}
