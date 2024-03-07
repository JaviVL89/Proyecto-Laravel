<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->timestamp('fecha')->nullable();
            $table->unsignedBigInteger('articulo_id'); // Asegúrate de tener esta línea para crear la columna
            $table->foreign('articulo_id')->references('id')->on('articulos')->onDelete('cascade');
            $table->unsignedBigInteger('usuario_id'); // Asegúrate de tener esta línea para crear la columna
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->unsignedBigInteger('evento_id')->nullable()->constrained('eventos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
