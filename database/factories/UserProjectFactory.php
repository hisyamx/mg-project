<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserProjectPivot;
use Faker\Generator as Faker;

$factory->define(UserProjectPivot::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(5, 99),
        'project_id' => $faker->numberBetween(1, 45),
    ];
});
