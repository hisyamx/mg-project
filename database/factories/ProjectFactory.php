<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $start_datetime = $faker->dateTimeBetween('-2 years', '-1 months');
    $finish_datetime = Carbon::make($start_datetime)->addDays($faker->numberBetween(14, 200));

    return [
        'name' => $faker->company,
        'division_id' => $faker->numberBetween(1, 3),
        'pj_user_id' => $faker->numberBetween(4, 99),
        'start' => $start_datetime,
        'finish' => $finish_datetime,
        'description' => $faker->realText(1000),
    ];
});
