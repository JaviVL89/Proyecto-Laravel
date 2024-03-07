<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{

    use HasFactory;
    // Un tag puede estar asociado a varios articulos
    public function articulos()
    {
        return $this->belongsToMany(Articulo::class, 'articulos_tags');
    }
}
