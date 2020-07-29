<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'type_document' => $faker->randomElement([User::CEDULA_CIUDADANIA,User::NUMERO_IDENTIFICACION_TRIBUTARIA]),
        'document' => $faker->numberBetween(1-10),
        'phone' => $faker->numberBetween(1-10),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'admission_date' => $faker->date('d-m-Y'),
        'salary' => $faker->randomElement([877803,1200000,1800000]),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
