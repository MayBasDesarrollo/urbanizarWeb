<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_propiedades', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('id_propiedad');
            //$table->foreign('id_propiedad')->references('id')->on('propiedades');
            // $table->string('id_tcarac');
            // $table->foreign('id_tcarac')->references('id')->on('tipo_caracteristicas');
            $table->integer('catidad');
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
        Schema::dropIfExists('caracteristicas_propiedades');
    }
}
