<?php

use App\Admin;
use App\Category;
use App\City;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    return [
        'fullname' => $faker->name,
        'username' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->randomNumber,
        'slug' => $faker->slug,
        'city_id' => $faker->numberBetween(1,3),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});






$factory->define(Admin::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'password' => Hash::make('123456'),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'icon' => 'fa fa-apple',
    ];
});

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
    ];
});
