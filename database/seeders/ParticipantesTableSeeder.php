<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participante;
class ParticipantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Participante::factory()->count(10)->create();
    }
}
