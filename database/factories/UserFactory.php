<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    $start_datetime = $faker->dateTimeBetween('-1 years', '-1 months');
    $finish_datetime = Carbon::make($start_datetime)->addDays($faker->numberBetween(100, 180));

    return [
        'code' => $faker->ean8,
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => Hash::make("123123"),
        'role' => $faker->randomElement([2, 3]),
        'division_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7]),
        'start' => $start_datetime,
        'finish' => $finish_datetime,
        'telephone' => $faker->phoneNumber,
        'address' => $faker->address,
        'instansi' => $faker->randomElement(['Universitas Negeri', 'Universitas', 'Politeknik']) . " " . $faker->randomElement(['Magelang', 'Semarang', 'Yogyakarta','Bandung'])
    ];
});
