<?php

namespace Tests\Feature;

use App\Admin;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminAuthTest extends TestCase
{

    /** @test */
    public function an_admin_see_correct_message_when_enter_wrong_credentials()
    {
        $this->post(route('admin.login'), [
            'username' => 'wrong-user-name',
            'password' => 'wrong-password'
        ])
            ->assertSessionHasErrors('username');

    }

    /** @test */
    public function an_admin_can_login()
    {
        $admin = create(Admin::class);

        $this->post(route('admin.login'), [
            'username' => $admin->username,
            'password' => '123456'
        ])
            ->assertRedirect(route('admin.home'));

    }

    /** @test */
    public function an_admin_can_logout()
    {

        $admin = create(Admin::class);

        $this->signIn($admin);

        $this->post(route('admin.logout'))
            ->assertRedirect(route('admin.login'));

    }


}
