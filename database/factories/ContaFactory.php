<?php

namespace Database\Factories;

use App\Models\Conta;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data_abertura' =>now(),
            'saldo' =>$this->faker->randomFloat(2, 0, 100),
            'numero' =>$this->faker->numberBetween(0, 1000),
            'senha_cartao' =>$this->faker->password(6, 6),
            'senha_internet' =>$this->faker->password(6, 6),
            'taxa_juros' =>$this->faker->randomFloat(2, 0, 100),
            'limite_credito' =>$this->faker->randomFloat(2, 0, 100),
            'taxa_rendimento' =>$this->faker->randomFloat(2, 0, 100),
            'tipo_conta' =>$this->faker->text(10),
        ];
    }
}
