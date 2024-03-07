<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        // Método up() define las operaciones que se realizarán al ejecutar la migración

        Schema::create('usuarios', function (Blueprint $table) {
            // Se crea la tabla usuarios con las siguientes columnas
            $table->id(); // Columna id autoincremental
            $table->string('nombre'); // Columna nombre de tipo string
            $table->string('email')->unique(); // Columna email de tipo string único
            $table->string('contrasena'); // Columna contrasena de tipo string
            $table->timestamp('fecha_registro')->nullable(); // Columna fecha_registro de tipo timestamp, que puede ser nula
            $table->timestamps(); // Columnas 'created_at' y 'updated_at' para gestionar las fechas de creación y actualización de registros
        });
    }

    public function down()
    {
        // Método down() define las operaciones que se realizarán al revertir la migración

        Schema::dropIfExists('usuarios'); // Elimina la tabla 'usuarios' si existe
    }
}
