<?php

namespace Database\Factories;

use App\Models\Participante;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipanteFactory extends Factory
{
    protected $model = Participante::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'rol' => $this->faker->jobTitle(),
            'contacto' => $this->faker->email(),
            'localizacion_id' => \App\Models\Localizacion::factory(),
            'evento_id' => function() {
                return \App\Models\Evento::factory()->create()->id;
            },
            
        ];
    }
}
