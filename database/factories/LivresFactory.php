<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Livres;
use Faker\Generator as Faker;


$factory->define(App\Livres::class, function (Faker $faker) {

    $x = rand(200, 210) . "x200";

    return [
        //
        'titre' => $faker->firstName,
        'isbn' => $faker->iban(),
        'auteur' => $faker->name,
        'photo' => "https://source.unsplash.com/random/".$x,
        'stock' => rand(1, 3)
    ];
});
