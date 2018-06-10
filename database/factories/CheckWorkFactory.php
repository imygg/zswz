<?php

use Faker\Generator as Faker;
use App\Models\CheckWork;

$factory->define(CheckWork::class, function (Faker $faker) {
    return [
        'time' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
        'work_id' => $faker->randomDigit,
        'user_id' => $faker->randomDigit,
        'pic' => $faker->imageUrl($width = 640, $height = 480),
        'txt' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'state' => $faker->randomDigit,
        'reply' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
