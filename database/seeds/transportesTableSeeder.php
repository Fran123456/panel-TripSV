<?php

use Illuminate\Database\Seeder;

class transportesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\transporte_model::class,5)->create();

    }
}
