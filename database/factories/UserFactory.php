<?php

use Faker\Generator as Faker;
use App\Models\User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'password' => $faker->word,
        'phone' => $faker->e164PhoneNumber,
        'avatar' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'register' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'last' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'remember_token' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'created_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
