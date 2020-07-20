<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->lexify('Bottle ???'),
        'product_price' => $faker->numberBetween(500, 100000)
    ];
});
