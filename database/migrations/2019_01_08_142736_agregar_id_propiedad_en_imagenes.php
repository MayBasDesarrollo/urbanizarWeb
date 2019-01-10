<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarIdPropiedadEnImagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imagenes_propiedades', function(Blueprint $table) {
            $table->unsignedInteger('propiedad_id')->after('id'); //entero sin signo
            $table->foreign('propiedad_id')->references('id')->on('propiedades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes_propiedades', function(Blueprint $table) {
            $table->dropforeign(['propiedad_id']);
            $table->dropColumn('propiedad_id'); 
        });
    }
}
