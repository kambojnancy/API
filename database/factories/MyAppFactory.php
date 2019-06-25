<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MyApp;
use Faker\Generator as Faker;

$factory->define(MyApp::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'desc' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
