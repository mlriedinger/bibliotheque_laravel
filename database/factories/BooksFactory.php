<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(50),
        'isbn'=> $faker->numerify('#############'),
        'author' => $faker->name,
        'image' => $faker->word() . '.jpg',
    ];
});
