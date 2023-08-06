<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;

class viagem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::create([
            'data' => '2023-08-03 17:28:38',
            'tipo' => 'ida',
            'veiculo_id' => '1'
        ]);
    }
}
