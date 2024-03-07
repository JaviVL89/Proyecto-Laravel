<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Horario extends Model
{
    use HasFactory;
    // Un horario está asociado a una localizacion
    public function localizacion()
    {
        return $this->belongsTo(Localizacion::class);
    }
}
