<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evento extends Model
{

    protected $fillable = ['titulo', 'nombre', 'descripcion', 'fecha'];
    protected $casts = [
        'fecha' => 'date',
    ];
    

    use HasFactory;
    // Un evento se celebra en una localizacion
    public function localizacion()
    {
        return $this->belongsTo(Localizacion::class);
    }

    // Un evento tiene varias imagenes
    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }

    // Un evento tiene varios participantes
    public function participantes()
    {
        return $this->belongsToMany(Participante::class, 'participantes_eventos');
    }

    // Un evento es asistido por varios usuarios
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'eventos_usuarios');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
