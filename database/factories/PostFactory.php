<?php

use Faker\Generator as Faker;

$factory->define(App\post::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->text(20),
        'slug'=>$faker->text(20),
        'body'=>$faker->text(200),
        'categoria_id'=>rand(1,200),
        'usuario_id'=>rand(1,200),

    ];
});
