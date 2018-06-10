<?php

use Faker\Generator as Faker;
use App\Models\MyWork;

$factory->define(MyWork::class, function (Faker $faker) {
    return [
        'work_id' => $faker->randomDigit,
        'state' => $faker->randomDigit,
        'answer' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'submit' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
