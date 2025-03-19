<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoautoresTable extends Migration
{
    public function up()
    {
        Schema::create('coautores', function (Blueprint $table) {
            $table->increments('id_coautor');

            $table->integer('id_autor')->unsigned();
            $table->foreign('id_autor')
                  ->references('id_autor')
                  ->on('autores')
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
        Schema::dropIfExists('coautores');
    }
}
