<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaGeneralTable extends Migration
{
    public function up()
    {
        Schema::create('linea_general', function (Blueprint $table) {
            $table->increments('id_linea_general');
            $table->string('nombre_linea_general', 255);

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
        Schema::dropIfExists('linea_general');
    }
}
