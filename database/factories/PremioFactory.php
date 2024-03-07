<?php

namespace Database\Factories;

use App\Models\Premio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PremioFactory extends Factory
{
    protected $model = Premio::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'anio' => $this->faker->year(),
            'participante_id' => \App\Models\Participante::factory(),
        ];
    }
}

