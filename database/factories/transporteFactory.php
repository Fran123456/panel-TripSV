<?php

use Faker\Generator as Faker;

$factory->define(\App\transporte_model::class, function (Faker $faker) {
    $title = $faker->sentence(6);
    return [
        'nombre'=>$title,
        'descripcion'=>$faker->text(75),
        'capacidad'=> rand(1,100)
    ];
});
