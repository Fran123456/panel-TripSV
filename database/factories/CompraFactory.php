<?php

use Faker\Generator as Faker;

$factory->define(App\Compra::class, function (Faker $faker) {
    return [
        	 'acompañantes'=>rand(1,200),
    	 'total'=>rand(1,200),
    	 'estado'=>$faker->text(5),
    	 'stockpago'=>rand(1,200),
    	 'paquete_id'=>rand(1,200),
    	 'ubicacion_id'=>rand(1,200),
    	 'cliente_id'=>rand(1,200),
 
    ];
});
