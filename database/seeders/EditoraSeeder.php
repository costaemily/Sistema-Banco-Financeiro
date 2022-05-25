<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Editora;

class EditoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Editora $dados)
    {
        // $dados->create([
        //     'nome' => 'Emily da Silva Costa',
        //     'data_cadastro' =>now(),
        // ]);

        Editora::factory()->count(20)->create();
    }
}
