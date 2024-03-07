<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario; // Importar el modelo Usuario para poder utilizarlo

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(), // Generar un título aleatorio usando el generador de frases faker
            'contenido' => $this->faker->paragraphs(asText: true), // Generar contenido aleatorio usando el generador de párrafos faker
            'fecha_publicacion' => $this->faker->dateTimeBetween('-1 year', 'now'), // Generar una fecha de publicación aleatoria en el último año
            'usuario_id' => function () {
                return Usuario::factory()->create()->id; // Crear un nuevo usuario utilizando la fábrica de usuarios y obtener su ID
            }
        ];
    }
}
