<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
   
     public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_signup_form()
    {
        $response = $this->get('/signup');
        $response->assertStatus(200);
    }
    // public function test_signup_user()
    // {
    //    $response = $this->post('signup-user',[
        
    //     'email' => 'vishal123@gmail.com',
    //     'first_name' => 'vishal',
    //     'last_name' => 'kumar',
    //     'password' => '123456',
    //     'confirm_password' => '123456'
    //    ]);
    //    $response->assertRedirect('/login');
    // }
}
