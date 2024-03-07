<?php

namespace Database\Factories;

use App\Models\Localizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalizacionFactory extends Factory
{
    protected $model = Localizacion::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->company(),
            'direccion' => $this->faker->address(),
            'capacidad' => $this->faker->numberBetween(50, 500),
            'descripcion' => $this->faker->paragraph(),
        ];
    }
}

