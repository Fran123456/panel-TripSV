<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuristaClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turista_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('dui');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('telefono');
            $table->integer('user_id')->index();
            //$table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('turista_clientes');
    }
}
