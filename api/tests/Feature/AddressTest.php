<?php

use App\Models\Address;

// it('Should create a address', function () {

//     $token = 'tokenJWT';

//     $body = [];

//     $response = $this->post(
//         '/api/address',
//         $body,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });


// it('Should delete a address', function () {

//     $token = 'tokenJWT';

//     $address = Address::factory()->create();

//     $response = $this->delete(
//         '/api/address/' . $address->id,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });


// it('Should show a address', function () {

//     $token = 'tokenJWT';

//     $address = Address::factory()->create();

//     $response = $this->get(
//         '/api/address/' . $address->id,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should index address', function () {

//     $token = 'tokenJWT';

//     $address = Address::factory()->create();

//     $response = $this->get(
//         '/api/address/',
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should update a address', function () {

//     $token = 'tokenJWT';

//     $address = Address::factory()->create();

//     $body = [];

//     $response = $this->put(
//         '/api/address/' . $address->id,
//         $body,
//         [
//            'Authorization' => 'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });