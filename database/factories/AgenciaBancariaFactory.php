<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgenciaBancariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' =>$this->faker->name(),
            'numero' =>$this->faker->phoneNumber(),
            'cnpj' =>$this->faker->numberBetween(0, 100),
            'email' =>$this->faker->email(),
            'numero_endereco' =>$this->faker->numberBetween(0, 20),
            'numero_telefone' =>$this->faker->phoneNumber()
        ];
    }
}
