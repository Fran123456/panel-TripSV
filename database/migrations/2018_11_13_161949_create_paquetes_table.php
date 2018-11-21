   <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('body');
            $table->string('estado');
            $table->integer('cupo');
            $table->integer('stock');
            $table->dateTime('hora_partida');
            $table->dateTime('hora_regreso');//
            $table->integer('guia_id')->index();
            $table->integer('rutaTuristica_id')->index();
            $table->integer('transporte_id')->index();
            //$table->foreign('guia_id')->references('id')->on('guias');
            //$table->foreign('rutaTuristica_id')->references('id')->on('ruta_Turisticas');
            //$table->foreing('trasnporte_id')->references('id')->on('uidades_transportes');
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
        Schema::dropIfExists('paquetes');
    }
}
