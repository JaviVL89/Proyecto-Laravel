<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentariosTableSeeder extends Seeder
{
    public function run()
    {
        Comentario::factory()->count(10)->create();
    }
}
