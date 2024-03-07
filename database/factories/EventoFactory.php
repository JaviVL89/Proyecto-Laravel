<?php

namespace Database\Factories;

use App\Models\Evento;
use App\Models\Localizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evento::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->words(3, true),
            'titulo' => $this->faker->sentence,
            'descripcion' => $this->faker->paragraph,
            'fecha' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
            'localizacion_id' => function() {
                return Localizacion::factory()->create()->id;
            }
        ];
    }
}
