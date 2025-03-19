<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoresPrincipalesTable extends Migration
{
    public function up()
    {
        

        Schema::create('autores_principales', function (Blueprint $table) {
            $table->increments('id_autor_principal');

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
        
        Schema::dropIfExists('autores_principales');
    }
}
