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
                'capacidade' => 5,
                'estado' => 'Activo',
                'rota_id' => 1,
                'created_at' => '2023-08-04 10:26:51',
                'updated_at' => '2023-09-01 20:54:07',
            ),
            1 => 
            array (
                'id' => 3,
                'modelo' => 'Hiace',
                'placa' => 'AVS-231-MC',
                'combustivel' => 'Gasolina',
                'capacidade' => 5,
                'estado' => 'Activo',
                'rota_id' => 1,
                'created_at' => '2023-08-16 10:47:30',
                'updated_at' => '2023-09-01 20:53:56',
            ),
            2 => 
            array (
                'id' => 4,
                'modelo' => 'Coaster 2003',
                'placa' => 'ADD-455-MP',
                'combustivel' => 'Diesel',
                'capacidade' => 5,
                'estado' => 'Activo',
                'rota_id' => 2,
                'created_at' => '2023-08-16 11:05:57',
                'updated_at' => '2023-09-01 20:52:48',
            ),
            3 => 
            array (
                'id' => 5,
                'modelo' => 'Mini Bus',
                'placa' => 'AXX-123-MP',
                'combustivel' => 'Diesel',
                'capacidade' => 5,
                'estado' => 'Activo',
                'rota_id' => 3,
                'created_at' => '2023-08-16 11:21:14',
                'updated_at' => '2023-09-01 20:53:32',
            ),
            4 => 
            array (
                'id' => 7,
                'modelo' => 'VVCCD',
                'placa' => 'DDA-234-MP',
                'combustivel' => 'Diesel',
                'capacidade' => 5,
                'estado' => 'Activo',
                'rota_id' => 5,
                'created_at' => '2023-08-16 11:44:44',
                'updated_at' => '2023-09-01 20:53:44',
            ),
            5 => 
            array (
                'id' => 9,
                'modelo' => 'Haudiu',
                'placa' => 'AAA-888-NPL',
                'combustivel' => 'Diesel',
                'capacidade' => 5,
                'estado' => 'Activo',
                'rota_id' => 3,
                'created_at' => '2023-08-18 14:50:17',
                'updated_at' => '2023-09-01 20:53:14',
            ),
            6 => 
            array (
                'id' => 10,
                'modelo' => 'Coaster',
                'placa' => 'KKM-987-MP',
                'combustivel' => 'Diesel',
                'capacidade' => 5,
                'estado' => 'activo',
                'rota_id' => 4,
                'created_at' => '2023-09-01 21:01:01',
                'updated_at' => '2023-09-01 21:01:01',
            ),
        ));
        
        
    }
}