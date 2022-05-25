<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conta;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Conta $dados)
    {
        /*$dados->create([
             'nome' => 'Emily da Silva Costa',
             'data_cadastro' =>now(),
        ]);*/
        Conta::factory()->count(10)->create();
        //Conta::factory()->count(20)->create();
    }
}
