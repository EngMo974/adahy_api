<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text(400),
        'title' => $faker->title,
        'date_written' => now(),
        'image' => $faker->imageUrl(),
        'user_id' => $faker->numberBetween(1, 20),
        'type_id' => $faker->numberBetween(1, 2),


    ];
});
