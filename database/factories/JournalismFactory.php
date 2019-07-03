<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Journalism;
use Faker\Generator as Faker;

$factory->define(Journalism::class, function (Faker $faker) {
    return [
        'title' => $faker->text(30),
        'thumb'=> $faker->imageUrl(800,600),
        'describe' => $faker->text(100),
        'content' => $faker->text(300),
        'views_count' => $faker->randomNumber(4),
    ];
});
