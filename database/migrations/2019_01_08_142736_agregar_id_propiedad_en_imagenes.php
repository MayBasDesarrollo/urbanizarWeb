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
            $table->unsignedInteger('id_propiedad')->after('id'); //entero sin signo
            $table->foreign('id_propiedad')->references('id')->on('propiedades');
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
            $table->dropforeign(['id_propiedad']);
            $table->dropColumn('id_propiedad'); 
        });
    }
}
