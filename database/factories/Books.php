<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Book;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'title' => $faker->title,
        'description' => $faker->description,
        'description_id' => rand(1,Category::count()),
        'active' => $faker->randomElement([0,1]),

    ];
});
