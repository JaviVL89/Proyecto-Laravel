<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imagen extends Model
{

    use HasFactory;
    
    protected $table = 'imagenes';
    
    // Una imagen está asociada a un evento
    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    // Una imagen está asociada a un articulo
    public function articulo()
    {
        return $this->belongsTo(Articulo::class);
    }
}
