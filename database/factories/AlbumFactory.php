<?php

use Faker\Generator as Faker;

$factory->define(contatoRapido\Models\Album::class, function (Faker $faker) {
    return [
        'name' => $faker->city
    ];
});
