<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(1),
        'body' => $faker->sentence(1),
    ];
});
