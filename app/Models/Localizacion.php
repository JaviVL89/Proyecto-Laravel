<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Localizacion extends Model
{

    use HasFactory;
   
    protected $table = 'localizaciones';
   
    // Una localizacion puede tener varios eventos
    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }

    // Una localizacion puede tener varios horarios
    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
}
