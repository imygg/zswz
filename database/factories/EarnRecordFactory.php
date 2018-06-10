<?php

use Faker\Generator as Faker;
use App\Models\EarnRecord;

$factory->define(EarnRecord::class, function (Faker $faker) {
    return [
        'time' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'type' => $faker->randomDigit,
        'work_id' => $faker->randomDigit,
        'money' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'explain' => $faker->word,
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
