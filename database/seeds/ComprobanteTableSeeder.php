<?php

use Illuminate\Database\Seeder;

class ComprobanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\comprobante::class,7)->create();
    }
}
