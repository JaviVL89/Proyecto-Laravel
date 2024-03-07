<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articulo extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'articulos';

    // Definición de la relación N:M con la entidad Tag
    public function tags()
    {
        // La relación pertenece a la tabla 'articulos_tag' siendo una tabla intermedia.
        return $this->belongsToMany(Tag::class, 'articulos_tag');
    }

    // Definición de la relación 1:N con la entidad comentario
    public function comentarios()
    {
        // Apunta a la tabla comentarios y usa el articulo_id como clave foránea.
        return $this->hasMany(Comentario::class, 'articulo_id');
    }

    // Definición de la relación 1:N con la entidad Imagen
    public function imagenes()
    {
        // Referencia a la tabla imagenes y usa articulo_id como clave foránea.
        return $this->hasMany(Imagen::class, 'articulo_id');
    }

    // Definición de la relación 1:N con la entidad Usuario
    public function usuario()
    {
        // Apunta a la tabla usuarios y usa usuario_id como clave foránea.
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
