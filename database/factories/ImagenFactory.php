<?php

namespace Database\Factories;

use App\Models\Imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    protected $model = Imagen::class;

    public function definition()
    {
        return [
            'URL' => $this->faker->imageUrl(),
            'descripcion' => $this->faker->text(),
            'fecha_subida' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'evento_id' => \App\Models\Evento::factory(),
        ];
    }
}
