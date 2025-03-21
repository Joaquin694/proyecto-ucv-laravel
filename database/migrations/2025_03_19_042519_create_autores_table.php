<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoresTable extends Migration
{
    public function up()
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->increments('id_autor');
            $table->string('nombre_autor', 255);
            $table->string('email_autor', 255);
            $table->string('password_autor', 255);
            $table->enum('rol', ['INVESTIGADOR','ADMINISTRADOR']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('autores');
    }
}
