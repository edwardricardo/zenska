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
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address,
        'telephone' => $faker->phoneNumber,
        'birthday' => $faker->date($format = 'Y-m-d', $max = '2000-12-31'),
        'sex' => $faker->randomElement($array = array ('F','M'))
    ];
});

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        'identificator' => $faker->numberBetween($min = 10000000, $max = 24000000),
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'address' => $faker->address,
        'telephone' => $faker->phoneNumber,
        'birthday' => $faker->date($format = 'Y-m-d', $max = '2000-12-31'),
        'sex' => $faker->randomElement($array = array('F', 'M'))
    ];
});

$factory->define(App\ProductProvider::class, function (Faker\Generator $faker) {
    return [
        'identificator' => $faker->randomElement($array = array('V', 'J', 'G')) . $faker->numberBetween($min = 10000000, $max = 24000000),
        'name' => $faker->company,
        'telephone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'contact' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->address,
        'payment' => $faker->randomElement($array = array('Contado', 'Credito')),
        'discount' => $faker->numberBetween($min = 0, $max = 15),
        'bank' => $faker->randomElement($array = array('Banesco', 'Bod', 'Mercantil', 'Provincial', 'Venezuela')),
        'bank_account' => $faker->randomNumber($nbDigits = 5, $strict = true) . $faker->randomNumber($nbDigits = 5, $strict = true) . $faker->randomNumber($nbDigits = 5, $strict = true) . $faker->randomNumber($nbDigits = 5, $strict = true),
        'observation' => $faker->sentence(20)

    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {

    $all = \App\ProductProvider::all()->all();
    $ids = array();

    foreach ($all as $one) {
        array_push($ids, $one->id);
    }

    return [
        'code' => $faker->unique()->numberBetween($min = 1000, $max = 5000),
        'name' => $faker->word,
        'section' => $faker->randomElement($array = array('hairdressing', 'handsfeetcare', 'barbershop', 'food', 'other')),
        'price' => $faker->numberBetween($min = 1000, $max = 5000),
        'stock' => $faker->randomNumber($nbDigits = 2, $strict = true),
        'active' => $faker->randomElement($array = array('Y', 'N')),
        'observation' => $faker->sentence(20)
    ];
});