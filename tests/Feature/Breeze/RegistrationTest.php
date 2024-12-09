<?php

namespace Tests\Feature\Breeze;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use DatabaseTransactions;

    /*
    public function test_registration_screen_and_component_can_be_rendered()
    {
        $response = $this->get(route('platform.register'));

        $response
            ->assertStatus(200)
            ->assertSeeLivewire('auth.register-user-form');
    }

    public function test_new_users_can_register()
    {
        $response = $this->post(route('platform.register'), [
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'testing@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
    */
}
