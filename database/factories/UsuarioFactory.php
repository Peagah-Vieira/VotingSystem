<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => fake()->unique()->email(),
            'senha' => fake()->password(6),
            'nome' => fake()->name(),
            'telefone' => fake()->phoneNumber(),
            'sobrenome' => fake()->lastName(),
            'estado' => 'RJ',
            'acesso' => 1,
            'situação' => 1
        ];
    }
}
