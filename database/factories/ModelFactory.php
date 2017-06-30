<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->word,
        'email' => $faker->unique()->safeEmail,
        'dob' => Carbon\Carbon::parse('July 6 13'),
        'password' => $password ?: $password = bcrypt('111111'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_id' => App\User::all()->random()->id,
        'content' => $faker->paragraph(5),
//        'post_on' => Carbon\Carbon::parse('+1 week'),
    ];
});

