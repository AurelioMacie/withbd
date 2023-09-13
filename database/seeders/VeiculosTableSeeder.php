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
                'estado' => 'activo',
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
                'estado' => 'activo',
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
                'estado' => 'activo',
                'rota_id' => 2,
                'created_at' => '2023-08-16 11:05:57',
                'updated_at' => '2023-09-01 20:52:48',
            ),
            3 => 
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
            4 => 
            array (
                'id' => 11,
                'modelo' => 'Youzing',
                'placa' => 'AXR-990-MP',
                'combustivel' => 'diesel',
                'capacidade' => 2,
                'estado' => 'activo',
                'rota_id' => 3,
                'created_at' => '2023-09-06 18:12:25',
                'updated_at' => '2023-09-06 18:12:25',
            ),
            5 => 
            array (
                'id' => 12,
                'modelo' => 'Suitun',
                'placa' => 'SSA-990-MP',
                'combustivel' => 'diesel',
                'capacidade' => 2,
                'estado' => 'activo',
                'rota_id' => 3,
                'created_at' => '2023-09-06 18:15:42',
                'updated_at' => '2023-09-06 18:15:42',
            ),
            6 => 
            array (
                'id' => 13,
                'modelo' => 'Huhink',
                'placa' => 'ACB-777-MC',
                'combustivel' => 'gasolina',
                'capacidade' => 2,
                'estado' => 'activo',
                'rota_id' => 5,
                'created_at' => '2023-09-11 06:24:01',
                'updated_at' => '2023-09-13 10:23:03',
            ),
            7 => 
            array (
                'id' => 14,
                'modelo' => 'Xdfrryyuyu',
                'placa' => 'ASD-343-MP',
                'combustivel' => 'diesel',
                'capacidade' => 3,
                'estado' => 'activo',
                'rota_id' => 5,
                'created_at' => '2023-09-13 09:36:51',
                'updated_at' => '2023-09-13 10:40:19',
            ),
            8 => 
            array (
                'id' => 15,
                'modelo' => 'Vuitbf',
                'placa' => 'AVC-223-MC',
                'combustivel' => 'gasolina',
                'capacidade' => 2,
                'estado' => 'activo',
                'rota_id' => 2,
                'created_at' => '2023-09-13 09:38:51',
                'updated_at' => '2023-09-13 09:38:51',
            ),
            9 => 
            array (
                'id' => 16,
                'modelo' => 'Bonaho',
                'placa' => 'SSD-256-GB',
                'combustivel' => 'diesel',
                'capacidade' => 2,
                'estado' => 'manutenção',
                'rota_id' => 5,
                'created_at' => '2023-09-13 09:59:48',
                'updated_at' => '2023-09-13 10:35:02',
            ),
        ));
        
        
    }
}