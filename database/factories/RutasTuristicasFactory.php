<?php

use Faker\Generator as Faker;

$factory->define(App\ruta_turistica::class, function (Faker $faker) {
    return [
        'longitud'=>rand(1,100),
        'latitud'=>rand(1,100),
        'img_destino'=>$faker->imageUrl($width =1200,$height=400),
        'titulo'=>$faker->text(20),
        'descripcion'=>$faker->text(200)
    ];
});
