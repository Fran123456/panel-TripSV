<?php

use Illuminate\Database\Seeder;

class MultimediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\multimedia::class,5)->create();
    }
}
