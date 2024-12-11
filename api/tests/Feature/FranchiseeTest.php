<?php

use App\Models\Admin;
use App\Models\Franchisee;
use Tests\Initiators\AdminInitiator;

it('Should create a franchisee', function () {

    $token = AdminInitiator::login()['token'];

    $body = [
        "name" => fake()->name(),
        "email" => fake()->email(),
        "password" => fake()->password()
    ];

    $response = $this->post(
        '/api/franchisee',
        $body,
        [
            'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});


it('Should delete a franchisee', function () {

    $token = AdminInitiator::login()['token'];

    $admin = Admin::first();

    $franchisee = Franchisee::factory()->create([
        'admin_id' => $admin->id
    ]);

    $response = $this->delete(
        '/api/franchisee/' . $franchisee->id,
        [],
        [
            'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});


// it('Should show a franchisee', function () {

//     $token = 'tokenJWT';

//     $franchisee = Franchisee::factory()->create();

//     $response = $this->get(
//         '/api/franchisee/' . $franchisee->id,
//         [
//             'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

it('Should index franchisee', function () {

    $token = AdminInitiator::login()['token'];

    $admin = Admin::first();

    for ($i = 0; $i < 10; $i++) {
        Franchisee::factory()->create([
            'admin_id' => $admin->id
        ]);
    }

    $response = $this->get(
        '/api/franchisee/',
        [
            'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});

// it('Should update a franchisee', function () {

//     $token = 'tokenJWT';

//     $franchisee = Franchisee::factory()->create();

//     $body = [];

//     $response = $this->put(
//         '/api/franchisee/' . $franchisee->id,
//         $body,
//         [
//             'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });