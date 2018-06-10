<?php

use Faker\Generator as Faker;
use App\Models\DrawRecord;

$factory->define(DrawRecord::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'draw' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'state' => $faker->randomDigit,
        'money' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'way' => $faker->randomDigit,
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
