<?php

namespace Database\Factories;

use App\Models\Autor;
use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'isbn' => $this->faker->unique()->numerify(str_pad('', 13, '#')),
            'portada' => $this->faker->url(),
            'anio_publicacion' => $this->faker->year(),
            'estado' => $this->faker->randomElement(['disponible', 'prestado', 'extraviado']),
            'autor_id' => Autor::all()->random()->id,
            'ubicacion_id' => Ubicacion::all()->random()->id
        ];
    }
}
