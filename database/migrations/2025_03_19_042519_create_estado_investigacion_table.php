<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoInvestigacionTable extends Migration
{
    public function up()
    {
        Schema::create('estado_investigacion', function (Blueprint $table) {
            $table->increments('id_estado');
            $table->string('estado_investigacion', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estado_investigacion');
    }
}
