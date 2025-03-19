<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaInvestigacionEspecificaTable extends Migration
{
    public function up()
    {
        Schema::create('linea_investigacion_especifica', function (Blueprint $table) {
            $table->increments('id_linea_investigacion_especifica');
            $table->string('nombre_linea_investigacion_especifica', 255);

            $table->integer('id_linea_general')->unsigned();
            $table->foreign('id_linea_general')
                  ->references('id_linea_general')
                  ->on('linea_general')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')
                  ->references('id_producto')
                  ->on('producto_investigacion')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('linea_investigacion_especifica');
    }
}
