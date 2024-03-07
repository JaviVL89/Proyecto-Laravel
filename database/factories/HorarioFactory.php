<?php

namespace Database\Factories;

use App\Models\Horario;
use App\Models\Localizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class HorarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Horario::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha_inicio' => $fechaInicio = $this->faker->dateTimeBetween('-1 year', '+1 year'),
            // Asumiendo que los horarios son de duración variable, aquí se añade un intervalo aleatorio.
            'hora' => $fechaInicio->format('H:i:s'), // Usa la misma fecha para la hora y modifica según necesites
            'localizacion_id' => function() {
                // Crea una localización nueva para cada horario generado, o ajusta según necesites para usar localizaciones existentes
                return Localizacion::factory()->create()->id;
            }
        ];
    }
}
