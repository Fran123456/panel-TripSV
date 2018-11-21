<?php

use Faker\Generator as Faker;

$factory->define(App\multimedia::class, function (Faker $faker) {
    return [
        'url'=>$faker->url(),
        'tipo'=>$faker->text(5),
        'post_id'=>rand(1,200),
        'paquete_id'=>rand(1,200),
    ];
});
