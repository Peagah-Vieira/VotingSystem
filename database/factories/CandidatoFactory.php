<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidato>
 */
class CandidatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'sobrenome' => fake()->lastName(),
            'estado' => 'RJ',
            'filiação' => 'PSDB',
            'número' => fake()->numberBetween(1000,9999),
            'votos' => 0,
            'situação' => 1
        ];
    }
}
