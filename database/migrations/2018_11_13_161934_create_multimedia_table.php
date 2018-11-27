<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia', function (Blueprint $table) {
            $table->increments('id');
            $table->text('url',400)->nullable();
            $table->string('tipo')->nullable();
            $table->integer('post_id')->index();
            $table->integer('paquete_id')->index();
            //$table->foreign('post_id')->references('id')->on('posts');
            //$table->foreign('paquete_id')->references('id')->on('paquetes');
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
        Schema::dropIfExists('multimedia');
    }
}
