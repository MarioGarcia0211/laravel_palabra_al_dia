<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'jugador' => $this->faker->name(),
            'dificultad' => $this->faker->randomElement(['Facíl', 'Normal', 'Difícil']),
            'tiempo' => $this->faker->numberBetween(30, 200)
        ];
    }
}
