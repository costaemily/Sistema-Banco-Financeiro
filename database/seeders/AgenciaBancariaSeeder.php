<?php

namespace Database\Seeders;

use App\Models\AgenciaBancaria;
use Illuminate\Database\Seeder;

class AgenciaBancariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgenciaBancaria::factory()->count(10)->create();
    }
}
