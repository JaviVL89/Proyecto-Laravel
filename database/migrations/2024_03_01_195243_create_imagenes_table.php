<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id();
            $table->string('URL');
            $table->text('descripcion')->nullable();
            $table->timestamp('fecha_subida')->useCurrent();
            $table->foreignId('evento_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}

