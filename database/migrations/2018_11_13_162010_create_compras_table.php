<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acompañantes')->nullable();
            $table->double('total', 8, 2)->nullable();
            $table->string('estado')->nullable();
            $table->double('stockpago')->nullable();
            $table->integer('paquete_id')->index();
            $table->integer('ubicacion_id')->index();
            $table->integer('cliente_id')->index();
           //$table->foreign('paquete_id')->references('id')->on('paquetes');
           // $table->foreign('ubicacion_id')->references('id')->on('ubicacions');
            //$table->foreign('cliente_id')->references('id')->on('turista_clientes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
