<?php

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;


test('dashboard requires authentication', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect('/login');
});

// test('logout redirects to login', function () {
//     // create a user and login
//     $user = User::factory()->create();
//     $this->actingAs($user);

//     // call the logout endpoint
//     $response = $this->post('/logout');

//     // assert that the user is logged out and redirected to the login page
//     $this->assertGuest();
//     $response->assertRedirect('/login');
// });


// test('signup user', function () {
//     $response = $this->post('signup-user',[
//         'email' => 'vishal123@gmail.com',
//         'first_name' => 'vishal',
//         'last_name' => 'kumar',
//         'password' => '123456',
//         'confirm_password' => '123456'
//     ]);
//     $response->assertRedirect('/login');
// });