<?php

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;


test('dashboard requires authentication', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect('/login');
});



test('auth middleware is working', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect('/login');
});


test('user can signup', function () {
    $userData = [
        'email' => 'mohnish123@gmail.com',
        'first_name' => 'mohnish',
        'last_name' => 'singh',
        'password' => '123123',
        'confirm_password' => '123123',
    ];

    $this->post(route('signup-user'), $userData)
        ->assertSessionHas('success', 'You have registered successfully');

    $this->assertDatabaseHas('users', [
        'email' => 'mohnish123@gmail.com',
        'first_name' => 'mohnish',
        'last_name' => 'singh',
    ]);
});
