<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Premio;


class PremiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Premio::factory()->count(10)->create();
    }
}
