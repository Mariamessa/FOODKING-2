<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\page;
use Faker\Generator as Faker;

$factory->define(page::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->paragraph(3),
        
    ];
});
