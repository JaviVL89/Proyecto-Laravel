<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Articulo;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comentario::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'contenido' => $this->faker->paragraph, // Generar un contenido aleatorio utilizando el generador de párrafos faker
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'), // Generar una fecha aleatoria entre el último año y el presente
            'articulo_id' => function() {
                return Articulo::factory()->create()->id; // Crear un nuevo artículo utilizando la fábrica de artículos y obtener su ID
            },
            'usuario_id' => function() {
                return Usuario::factory()->create()->id; // Crear un nuevo usuario utilizando la fábrica de usuarios y obtener su ID
            }
        ];
    }
}
