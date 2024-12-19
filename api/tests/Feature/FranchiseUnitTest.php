<?php

use App\Models\Franchise;
use App\Models\User;
use Tests\Initiators\AdminInitiator;

it('Should create a franchise Unit', function () {

    $token = AdminInitiator::login()['token'];

    $franchise = Franchise::factory()->create();

    $user = User::first();

    $body = [
        'franchise_id' => $franchise->id,
        'name' => fake()->name(),
        'street' => fake()->streetName(),
        'number' => fake()->randomNumber(2),
        'city' => fake()->city(),
        'cep' => fake()->numberBetween(12702030, 12704090),
        'state' => fake()->streetAddress(),
        'country' => fake()->country(),
        'complement' => fake()->streetName(),
        'neighborhood' => fake()->streetName(),
        'user_id' => $user->id
    ];
 
    $response = $this->post(
        '/api/franchise-unit',
        $body,
        [
           'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});


// it('Should delete a franchiseUnit', function () {

//     $token = 'tokenJWT';

//     $franchiseUnit = FranchiseUnit::factory()->create();

//     $response = $this->delete(
//         '/api/franchiseUnit/' . $franchiseUnit->id,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should show a franchiseUnit', function () {

//     $token = 'tokenJWT';

//     $franchiseUnit = FranchiseUnit::factory()->create();

//     $response = $this->get(
//         '/api/franchiseUnit/' . $franchiseUnit->id,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should index franchiseUnit', function () {

//     $token = 'tokenJWT';

//     $franchiseUnit = FranchiseUnit::factory()->create();

//     $response = $this->get(
//         '/api/franchiseUnit/',
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should update a franchiseUnit', function () {

//     $token = 'tokenJWT';

//     $franchiseUnit = FranchiseUnit::factory()->create();

//     $body = [];

//     $response = $this->put(
//         '/api/franchiseUnit/' . $franchiseUnit->id,
//         $body,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });