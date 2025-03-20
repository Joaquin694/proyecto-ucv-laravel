<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoInvestigacionTable extends Migration
{
    public function up()
    {
        Schema::create('producto_investigacion', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('titulo_producto', 255);
            $table->string('tipo_producto', 255);
            
            $table->integer('id_estado')->unsigned();
            $table->foreign('id_estado')
                  ->references('id_estado')
                  ->on('estado_investigacion')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');

            $table->integer('anio_publicacion');
            $table->date('fecha_publicacion');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('producto_investigacion');
    }
}
