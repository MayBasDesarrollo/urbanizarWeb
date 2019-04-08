<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->string('direccion');
            $table->unsignedInteger('tprop_id');
            $table->foreign('tprop_id')->references('id')->on('tipo_propiedades');
            $table->unsignedInteger('topeprop_id');
            $table->foreign('topeprop_id')->references('id')->on('tipo_operacion_propiedades');
            $table->bigInteger('valor');
            $table->bigInteger('expensas');
            $table->boolean('disponibilidad');
            $table->boolean('destacada');
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
        Schema::dropIfExists('propiedades');
    }
}
