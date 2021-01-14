<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'content' => $faker->paragraph(3),
        'img' => $faker->imageUrl(640,480,'cats'),
    ];
});
