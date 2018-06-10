<?php

use Faker\Generator as Faker;
use App\Models\Money;

$factory->define(Money::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'now' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'total' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
