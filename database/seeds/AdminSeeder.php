<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'admin',
            'password' => Hash::make('123456')
        ]);

        Admin::create([
            'username' => 'miaababikir',
            'password' => Hash::make('123456')
        ]);

        Admin::create([
            'username' => 'munzir',
            'password' => Hash::make('123456')
        ]);

        Admin::create([
            'username' => 'basheer',
            'password' => Hash::make('123456')
        ]);
    }
}
