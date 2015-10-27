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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'role' => $faker->randomElement(['user']),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        'identificator' => $faker->numberBetween($min = 10000000, $max = 24000000),
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address,
        'telephone' => $faker->phoneNumber,
        'birthday' => $faker->date($format = 'Y-m-d', $max = '2000-12-31'),
        'sex' => $faker->randomElement($array = array ('F','M'))
    ];
});