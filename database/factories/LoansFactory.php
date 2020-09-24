<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Loans;
use Faker\Generator as Faker;

$factory->define(Loans::class, function (Faker $faker) {
    $user_ids = \DB::table('users')->select('id')->get();
    $random_user_id = $faker->randomElement($user_ids)->id; 

    $books_ids = \DB::table('books')->select('id')->get();
    $random_book_id = $faker->randomElement($books_ids)->id;

    return [
        'user_id' => $random_user_id,
        'books_id' => $random_book_id,
        'loan_start' => $faker->date(),
        'loan_end'=> $faker->dateTimeBetween('-4 years', 'now'),
    ];
});
