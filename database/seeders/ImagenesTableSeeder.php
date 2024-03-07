<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;
class ImagenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Imagen::factory()->count(10)->create();
    }
}
