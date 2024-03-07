<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comentario extends Model
{
    use HasFactory;
    // Un Comentario es hecho por un Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    // Un Comentario está asociado a un Articulo
    public function articulo()
    {
        return $this->belongsTo(Articulo::class);
    }
    public function evento()
{
    return $this->belongsTo(Evento::class);
}

}
