<?php
declare(strict_types=1);

use App\Auth\Insfrastructure\NoSQL\Redis\TokenRepository;

uses(\Tests\TestCase::class);

beforeEach(function () {
    $this->tokenRepository = new TokenRepository();
  // \Illuminate\Support\Facades\Redis::command('');
});


test('sum', function () {
    expect(2)->toBeGreaterThan(0);
});
