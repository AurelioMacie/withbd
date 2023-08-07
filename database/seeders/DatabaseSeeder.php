<?php

namespace Database\Seeders;

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
        $this->call(RotasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MotoristasTableSeeder::class);
        $this->call(MultasTableSeeder::class);
        $this->call(SolicitacaosTableSeeder::class);
        $this->call(VeiculosTableSeeder::class);
        $this->call(ViagemsTableSeeder::class);
        $this->call(EstudantesTableSeeder::class);
        $this->call(EncarregadosTableSeeder::class);
        $this->call(VeiculoMotoristasTableSeeder::class);
        $this->call(EstudanteViagemsTableSeeder::class);
    }
}
