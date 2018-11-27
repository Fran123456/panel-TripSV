<?php

use Faker\Generator as Faker;

$factory->define(App\Guia::class, function (Faker $faker) {
    $title= $faker->sentence(4);
    return [
        'nombre'=> $faker->name,
        'apellido' =>$faker->name,
        'disponibilidad' =>$faker->text(10),
        'dui'=>rand(1,30),
        'img_profile'=>$faker->imageUrl($width =1200,$height=400),
            ];
});

?>

