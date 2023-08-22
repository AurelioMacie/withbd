<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ViagemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('viagems')->delete();
        
        \DB::table('viagems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data' => '2023-08-16 00:00:00',
                'tipo' => 'volta',
                'veiculo_id' => 2,
                'created_at' => '2023-08-06 19:30:08',
                'updated_at' => '2023-08-17 09:32:32',
            ),
            1 => 
            array (
                'id' => 2,
                'data' => '2023-08-16 00:00:00',
                'tipo' => 'ida',
                'veiculo_id' => 2,
                'created_at' => '2023-08-06 19:31:30',
                'updated_at' => '2023-08-16 19:44:25',
            ),
            2 => 
            array (
                'id' => 3,
                'data' => '2023-08-16 00:00:00',
                'tipo' => 'volta',
                'veiculo_id' => 3,
                'created_at' => '2023-08-16 12:56:03',
                'updated_at' => '2023-08-17 09:32:19',
            ),
            3 => 
            array (
                'id' => 4,
                'data' => '2023-08-16 00:00:00',
                'tipo' => 'ida',
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 12:59:23',
                'updated_at' => '2023-08-16 19:43:45',
            ),
            4 => 
            array (
                'id' => 5,
                'data' => '2023-08-16 00:00:00',
                'tipo' => 'volta',
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 18:57:09',
                'updated_at' => '2023-08-17 09:31:56',
            ),
            5 => 
            array (
                'id' => 6,
                'data' => '2023-08-16 00:00:00',
                'tipo' => 'ida',
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 19:06:17',
                'updated_at' => '2023-08-16 19:43:06',
            ),
            6 => 
            array (
                'id' => 7,
                'data' => '2023-08-17 22:08:00',
                'tipo' => 'ida',
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 19:06:54',
                'updated_at' => '2023-08-16 20:06:05',
            ),
            7 => 
            array (
                'id' => 8,
                'data' => '2024-07-08 17:00:00',
                'tipo' => 'volta',
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 19:53:42',
                'updated_at' => '2023-08-17 09:31:27',
            ),
            8 => 
            array (
                'id' => 9,
                'data' => '2023-08-18 16:55:00',
                'tipo' => 'volta',
                'veiculo_id' => 9,
                'created_at' => '2023-08-18 14:55:40',
                'updated_at' => '2023-08-18 14:55:40',
            ),
            9 => 
            array (
                'id' => 10,
                'data' => '2023-08-21 10:03:00',
                'tipo' => 'volta',
                'veiculo_id' => 7,
                'created_at' => '2023-08-21 08:05:11',
                'updated_at' => '2023-08-21 08:05:11',
            ),
            10 => 
            array (
                'id' => 11,
                'data' => '2023-08-21 11:55:00',
                'tipo' => 'ida',
                'veiculo_id' => 7,
                'created_at' => '2023-08-21 09:55:48',
                'updated_at' => '2023-08-21 09:55:48',
            ),
        ));
        
        
    }
}