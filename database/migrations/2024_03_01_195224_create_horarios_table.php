<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inicio');
            $table->time('hora'); 
            $table->unsignedBigInteger('localizacion_id');
            $table->foreign('localizacion_id')->references('id')->on('localizaciones')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
