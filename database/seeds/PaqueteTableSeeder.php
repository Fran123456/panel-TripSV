<?php

use Illuminate\Database\Seeder;

class PaqueteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\paquete::class,5)->create();
    }
}
