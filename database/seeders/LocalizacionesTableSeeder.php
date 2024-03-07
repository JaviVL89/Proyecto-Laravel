<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Localizacion;
class LocalizacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Localizacion::factory()->count(10)->create();
    }
}
