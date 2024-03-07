<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participante extends Model
{

    use HasFactory;
    // Un participante recibe varios Premios
    public function premios()
    {
        return $this->hasMany(Premio::class);
    }

    // Un participante participa en varios Eventos
    public function eventos()
    {
        return $this->belongsToMany(Evento::class, 'participantes_eventos');
    }
}
