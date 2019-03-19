<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use DatabaseMigrations;

    protected function signIn($admin = null)
    {
        $admin = $admin ?: create('App\Admin');
        $this->actingAs($admin);

        return $this;
    }
}
