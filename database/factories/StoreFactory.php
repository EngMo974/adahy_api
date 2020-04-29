<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'store_name'=>$faker->title,
        'description'=>$faker->text(500),
        'address'=>$faker->address,
        'user_id' => $faker->numberBetween(1, 20),
        'type_id' => $faker->numberBetween(1, 2),
    ];
});
