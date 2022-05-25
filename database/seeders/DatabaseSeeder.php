<?php

namespace Database\Seeders;

use App\Http\Controllers\ContaController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(EditoraSeeder::class);
        $this->call(ContaSeeder::class);
        $this->call(BancoSeeder::class);
        $this->call(AgenciaBancariaSeeder::class);
    }
}
