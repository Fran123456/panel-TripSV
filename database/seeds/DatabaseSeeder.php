<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $this->call(transportesTableSeeder::class);

        //$this->call(UsersTableSeeder::class);
        $this->call(GuiasTableSeeder::class);

        $this->call(ComprasTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ComprobanteTableSeeder::class);
        $this->call(MultimediaTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(PaqueteTableSeeder::class);
        $this->call(RutasTuristicasTableSeeder::class);


    }
}
