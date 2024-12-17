<?php

use App\Models\FranchiseUnit;

it('Should create a franchiseUnit', function () {

    $token = 'tokenJWT';

    $body = [];

    $response = $this->post(
        '/api/franchiseUnit',
        $body,
        [
           'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});


it('Should delete a franchiseUnit', function () {

    $token = 'tokenJWT';

    $franchiseUnit = FranchiseUnit::factory()->create();

    $response = $this->delete(
        '/api/franchiseUnit/' . $franchiseUnit->id,
        [
           'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});


it('Should show a franchiseUnit', function () {

    $token = 'tokenJWT';

    $franchiseUnit = FranchiseUnit::factory()->create();

    $response = $this->get(
        '/api/franchiseUnit/' . $franchiseUnit->id,
        [
           'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});

it('Should index franchiseUnit', function () {

    $token = 'tokenJWT';

    $franchiseUnit = FranchiseUnit::factory()->create();

    $response = $this->get(
        '/api/franchiseUnit/',
        [
           'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});

it('Should update a franchiseUnit', function () {

    $token = 'tokenJWT';

    $franchiseUnit = FranchiseUnit::factory()->create();

    $body = [];

    $response = $this->put(
        '/api/franchiseUnit/' . $franchiseUnit->id,
        $body,
        [
           'Authorization' => 'Bearer ' . $token,
        ]
    );

    $response->assertStatus(200);
});