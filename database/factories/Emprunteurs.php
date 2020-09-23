<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'prenom' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'telephone' =>  $faker->e164PhoneNumber
    ];
});