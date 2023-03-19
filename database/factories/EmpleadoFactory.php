<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'PrimerNombre' =>  fake()->name(),
            'SegundoNombre' => fake()->name(),
            'TercerNombre' => fake()->name(),
            'PrimerApellido' => fake()->name(),
            'SegundoApellido' => fake()->name(),
            'ApellidoMatrimonio' => fake()->name(),
            'Genero'=> 'F',
            'FechaNacimiento' => now()
        ];
    }
}
