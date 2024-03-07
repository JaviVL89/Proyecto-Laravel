<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('localizacion_id')->nullable();
            $table->foreign('localizacion_id')->references('id')->on('localizaciones')->onDelete('set null');
            
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}

