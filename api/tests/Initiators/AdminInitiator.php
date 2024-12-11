<?php

namespace Tests\Initiators;

use App\Models\Admin;
use App\Models\User;

use App\Services\AuthService;

class AdminInitiator
{
    public static function login()
    {
        $user = User::factory()->create();

        Admin::create([
            'user_id' => $user->id
        ]);

        $authService = new AuthService();
        return $authService->login(['email' => $user->email, 'password' => 'password']);
    }
}
