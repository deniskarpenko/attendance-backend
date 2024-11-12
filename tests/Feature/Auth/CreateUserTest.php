<?php

test('create user', function () {
    $response = $this->json('POST', 'auth/login');
    $results = $response->json('data');
    echo print_r($results, true);
    expect(true)->toBeTrue();
});
