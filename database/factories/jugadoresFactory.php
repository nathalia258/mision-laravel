<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class jugadoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id" => fake()->id,
            "nombres" => fake()->name(),
            "apellidos" => fake()->lastName(),
            "direccion" => fake()->address(),
            "fechaDeNacimiento" => fake()->date(),
        ];
    }
}
