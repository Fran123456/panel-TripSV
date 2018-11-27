<?php

use Faker\Generator as Faker;

$factory->define(App\paquete::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->text(10),
        'body'=>$faker->text(400),
        'estado'=>$faker->text(5),
        'cupo'=>rand(1,200),
        'stock'=>rand(1,200),
        'hora_partida'=>$faker->dateTime(),
        'hora_regreso'=>$faker->dateTime(),
        'guia_id'=>rand(1,200),
        'rutaTuristica_id'=>rand(1,200),
        'transporte_id'=>rand(1,200),

    ];
});
