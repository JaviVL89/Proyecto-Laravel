<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Horario;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Horario::factory()->count(10)->create();
    }
}
