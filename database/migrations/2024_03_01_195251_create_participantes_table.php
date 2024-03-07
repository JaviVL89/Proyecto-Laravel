<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rol');
            $table->string('contacto');
            $table->foreignId('evento_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('localizacion_id')->nullable();
    $table->foreign('localizacion_id')->references('id')->on('localizaciones')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participantes');
    }
}

