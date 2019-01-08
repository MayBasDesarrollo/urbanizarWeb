<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarIdTcaracEnCaracteristicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('caracteristicas_propiedades', function(Blueprint $table) {
            $table->unsignedInteger('id_tcarac')->after('id'); //entero sin signo
            $table->foreign('id_tcarac')->references('id')->on('tipo_caracteristicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caracteristicas_propiedades', function(Blueprint $table) {
            $table->dropforeign(['id_tcarac']);
            $table->dropColumn('id_tcarac'); 
        });
    }
}
