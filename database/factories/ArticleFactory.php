<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->realText(),
        'price'=>21,
        'cat_id'=>2,
        'details'=>$faker->realText(),
        'URI'=>"k",
        'imgURI'=>"j",
    ];
});
