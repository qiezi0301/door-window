<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'tid' => $faker->numberBetween(1,6),
        'name' => $faker->name,
        'thumb'=> $faker->imageUrl(260,260),
        'content' => $faker->text,
        'pictures' => $faker->imageUrl(620,620),
    ];
});