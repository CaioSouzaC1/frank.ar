<?php

use Tests\Initiators\AdminInitiator;

it('Should create a franchise', function () {

    $token = AdminInitiator::login()['token'];

    $body = [
        'name' => fake()->name(),
        'primary_color' => fake()->hexColor(),
        'secondary_color' => fake()->hexColor()
    ];

    $response = $this->post(
        '/api/franchise',
        $body,
        [
            'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});


// it('Should delete a franchise', function () {

//     $token = 'tokenJWT';

//     $franchise = Franchise::factory()->create();

//     $response = $this->delete(
//         '/api/franchise/' . $franchise->id,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should show a franchise', function () {

//     $token = 'tokenJWT';

//     $franchise = Franchise::factory()->create();

//     $response = $this->get(
//         '/api/franchise/' . $franchise->id,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should index franchise', function () {

//     $token = 'tokenJWT';

//     $franchise = Franchise::factory()->create();

//     $response = $this->get(
//         '/api/franchise/',
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should update a franchise', function () {

//     $token = 'tokenJWT';

//     $franchise = Franchise::factory()->create();

//     $body = [];

//     $response = $this->put(
//         '/api/franchise/' . $franchise->id,
//         $body,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });