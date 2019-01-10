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
            $table->unsignedInteger('tcarac_id')->after('id'); //entero sin signo
            $table->foreign('tcarac_id')->references('id')->on('tipo_caracteristicas');
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
            $table->dropforeign(['tcarac_id']);
            $table->dropColumn('tcarac_id'); 
        });
    }
}
