<?php

use Faker\Generator as Faker;
use App\Models\Work;

$factory->define(Work::class, function (Faker $faker) {
    return [
        'type' => $faker->randomDigit,
        'title' => $faker->word,
        'state' => $faker->randomDigit,
        'number' => $faker->randomDigit,
        'answer' => $faker->randomDigit,
        'left' => $faker->randomDigit,
        'done' => $faker->randomDigit,
        'start' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'end' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'content' => $faker->text($maxNbChars = 200),
        'money' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'earn' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'profit' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'all_profit' => sprintf("%.2f", 0 + mt_rand() / mt_getrandmax() * (10 - 0)),
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
