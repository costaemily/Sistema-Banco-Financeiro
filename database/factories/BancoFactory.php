<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BancoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' =>$this->faker->text(5),
            'nome' =>$this->faker->name()
        ];
    }
}
