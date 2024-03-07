<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuariosTableSeeder::class,
            ArticulosTableSeeder::class,
            ComentariosTableSeeder::class,
            EventosTableSeeder::class,
            HorariosTableSeeder::class,
            ImagenesTableSeeder::class,
            LocalizacionesTableSeeder::class,
            ParticipantesTableSeeder::class,
            PremiosTableSeeder::class,
            TagsTableSeeder::class,
        ]);
    }
}

