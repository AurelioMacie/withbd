<?php

namespace Database\Seeders;

use App\Models\Drive;
use Illuminate\Database\Seeder;

class DriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drive::create([
            'modelo' => 'Coaster',
            'placa' => 'AAV-987-MP',
            'combustivel' => 'Diesel',
            'capacidade' => '45',
            'estado' => '',
            'rota_id' => '1'
        ]);
    }
}
