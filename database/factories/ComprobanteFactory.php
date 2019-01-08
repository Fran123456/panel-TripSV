<?php

use Faker\Generator as Faker;

$factory->define(App\comprobante::class, function (Faker $faker) {
    return [
        'fecha'=>$faker->date(),
        'compra_id'=>rand(1,200),
     	'paquete_id'=>rand(1,200),

    ];
});
