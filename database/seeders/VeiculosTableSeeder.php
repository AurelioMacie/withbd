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
                'estado' => 'Activo',
                'rota_id' => 1,
                'created_at' => '2023-08-04 10:26:51',
                'updated_at' => '2023-08-16 11:22:38',
            ),
            1 => 
            array (
                'id' => 3,
                'modelo' => 'Hiace',
                'placa' => 'AVS-231-MC',
                'combustivel' => 'Gasolina',
                'capacidade' => 20,
                'estado' => 'Activo',
                'rota_id' => 1,
                'created_at' => '2023-08-16 10:47:30',
                'updated_at' => '2023-08-16 10:47:30',
            ),
            2 => 
            array (
                'id' => 4,
                'modelo' => 'Coaster 2003',
                'placa' => 'ADD-455-MP',
                'combustivel' => 'Diesel',
                'capacidade' => 40,
                'estado' => 'Activo',
                'rota_id' => 2,
                'created_at' => '2023-08-16 11:05:57',
                'updated_at' => '2023-08-16 11:05:57',
            ),
            3 => 
            array (
                'id' => 5,
                'modelo' => 'Mini Bus',
                'placa' => 'AXX-123-MP',
                'combustivel' => 'Diesel',
                'capacidade' => 25,
                'estado' => 'Activo',
                'rota_id' => 3,
                'created_at' => '2023-08-16 11:21:14',
                'updated_at' => '2023-08-16 11:21:39',
            ),
            4 => 
            array (
                'id' => 6,
                'modelo' => 'Coaster Simples',
                'placa' => 'SSA-897-MC',
                'combustivel' => 'Gasolina',
                'capacidade' => 30,
                'estado' => 'Activo',
                'rota_id' => 6,
                'created_at' => '2023-08-16 11:43:27',
                'updated_at' => '2023-08-16 11:43:27',
            ),
            5 => 
            array (
                'id' => 7,
                'modelo' => 'VVCCD',
                'placa' => 'DDA-234-MP',
                'combustivel' => 'Diesel',
                'capacidade' => 15,
                'estado' => 'Activo',
                'rota_id' => 5,
                'created_at' => '2023-08-16 11:44:44',
                'updated_at' => '2023-08-16 11:44:44',
            ),
            6 => 
            array (
                'id' => 8,
                'modelo' => 'SfaFly',
                'placa' => 'SDA-546-MP',
                'combustivel' => 'Gasolina',
                'capacidade' => 15,
                'estado' => 'Manutenção',
                'rota_id' => 2,
                'created_at' => '2023-08-16 11:46:21',
                'updated_at' => '2023-08-16 11:46:21',
            ),
        ));
        
        
    }
}