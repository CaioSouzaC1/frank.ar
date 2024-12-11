<?php

use App\Services\AuthService;

it('Should register a admin', function () {

    $body = [
        "name" => fake()->name(),
        "email" => fake()->email(),
        "password" => fake()->password()
    ];

    $response = $this->post(
        '/api/auth/register',
        $body,
    );

    // dd($response->json());

    $response->assertStatus(200);
});

it('Should login an user', function () {
    $service = new AuthService();

    $userData = [
        'name' => fake()->name,
        'email' => fake()->safeEmail,
        'password' => fake()->password(),
    ];

    $service->register($userData);

    $response = $this->postJson('/api/auth/login', $userData);

    $response->assertStatus(200);
});
