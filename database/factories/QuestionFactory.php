<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
<<<<<<< HEAD
        'title' => rtrim($faker->sentence(rand(5, 10)), "."),
        'body' => $faker->paragraphs(rand(3, 7), true),
        'views' => rand(0, 10),
        // 'answers_count' => rand(0, 10),
        'votes' => rand(-3, 10)
=======
        'title' => rtrim($faker->sentence(rand(5,10)),"."),
        'body'  => $faker->paragraphs(rand(3,7),true),
        'views' => rand(0,10),
        //'answers_count' => rand(0,10),
        //'votes_count'  => rand(-3,10)
>>>>>>> lesson-22
    ];
});
