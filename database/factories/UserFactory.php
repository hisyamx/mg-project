<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
        'code' => $faker->ean8,
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => Hash::make("123123"),
        'role' => $faker->randomElement([2, 3]),
        'division_id' => $faker->randomElement([1, 2, 3]),
        'telephone' => $faker->phoneNumber,
        'address' => $faker->address,
        'instansi' => $faker->randomElement(['SMA N', 'SMP N', 'ALIYAH']) . " " . $faker->numberBetween(1, 15)
    ];
});
