<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuartilTable extends Migration
{
    public function up()
    {
        Schema::create('cuartil', function (Blueprint $table) {
            $table->increments('id_cuartil');
            $table->string('nombre_cuartil', 255);

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
        Schema::dropIfExists('cuartil');
    }
}
