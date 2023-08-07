<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VeiculosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('veiculos')->delete();
        
        \DB::table('veiculos')->insert(array (
            0 => 
            array (
                'id' => 2,
                'modelo' => 'Coaster',
                'placa' => 'AAV-915-MC',
                'combustivel' => 'Diesel',
                'capacidade' => 50,
                'estado' => 'Nenhum',
                'rota_id' => 1,
                'created_at' => '2023-08-04 10:26:51',
                'updated_at' => '2023-08-04 10:26:51',
            ),
        ));
        
        
    }
}