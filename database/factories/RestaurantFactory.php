<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Model;

$factory->define(App\restaurant::class, function (Faker $faker) {
    return [
       "name"=>$faker->sentence(1),
       "URL"=>$faker->sentence(2),
       "Logo"=>$faker->rand(1,13).".jpg"
    ];
});
