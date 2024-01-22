<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
use App\Models\Modulo;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modulo>
 */
class ModuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreModulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'idCurso' => function() {
                return Curso::factory()->create()->idCurso;
            }
        ];
    }
}
