<?php

use App\Models\Admin;

// it('Should create a admin', function () {

//     $token = 'tokenJWT';

//     $body = [];

//     $response = $this->post(
//         '/api/admin',
//         $body,
//         [
//             'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should delete a admin', function () {

//     $token = 'tokenJWT';

//     $admin = Admin::factory()->create();

//     $response = $this->delete(
//         '/api/admin/' . $admin->id,
//         [
//             'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should show a admin', function () {

//     $token = 'tokenJWT';

//     $admin = Admin::factory()->create();

//     $response = $this->get(
//         '/api/admin/' . $admin->id,
//         [
//             'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should index admin', function () {

//     $token = 'tokenJWT';

//     $admin = Admin::factory()->create();

//     $response = $this->get(
//         '/api/admin/',
//         [
//             'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });

// it('Should update a admin', function () {

//     $token = 'tokenJWT';

//     $admin = Admin::factory()->create();

//     $body = [];

//     $response = $this->put(
//         '/api/admin/' . $admin->id,
//         $body,
//         [
//             'Bearer ' . $token,
//         ]
//     );

//     $response->assertStatus(200);
// });