<?php

use Illuminate\Database\Seeder;

class RutasTuristicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ruta_turistica::class,5)->create();  
    }
}
