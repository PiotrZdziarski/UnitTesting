<?php

use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(15),
        'price' => random_int(1, 100),
        'category_id' => random_int(1,10),
    ];
});
