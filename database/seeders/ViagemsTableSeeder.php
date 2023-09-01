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
            11 => 
            array (
                'id' => 12,
                'data' => '2023-09-01 11:37:00',
                'tipo' => 'volta',
                'veiculo_id' => NULL,
                'created_at' => '2023-09-01 09:38:07',
                'updated_at' => '2023-09-01 09:38:07',
            ),
            12 => 
            array (
                'id' => 13,
                'data' => NULL,
                'tipo' => 'ida',
                'veiculo_id' => NULL,
                'created_at' => '2023-09-01 09:39:23',
                'updated_at' => '2023-09-01 09:39:23',
            ),
            13 => 
            array (
                'id' => 14,
                'data' => '2023-09-01 11:41:00',
                'tipo' => 'ida',
                'veiculo_id' => NULL,
                'created_at' => '2023-09-01 09:41:17',
                'updated_at' => '2023-09-01 09:41:17',
            ),
            14 => 
            array (
                'id' => 15,
                'data' => '2023-09-01 11:55:00',
                'tipo' => 'ida',
                'veiculo_id' => 2,
                'created_at' => '2023-09-01 10:01:24',
                'updated_at' => '2023-09-01 10:01:24',
            ),
            15 => 
            array (
                'id' => 16,
                'data' => '2023-09-01 12:13:00',
                'tipo' => 'volta',
                'veiculo_id' => 2,
                'created_at' => '2023-09-01 10:13:47',
                'updated_at' => '2023-09-01 10:13:47',
            ),
            16 => 
            array (
                'id' => 17,
                'data' => '2023-09-01 12:13:00',
                'tipo' => 'volta',
                'veiculo_id' => 2,
                'created_at' => '2023-09-01 10:13:50',
                'updated_at' => '2023-09-01 10:13:50',
            ),
            17 => 
            array (
                'id' => 18,
                'data' => '2023-09-01 12:13:00',
                'tipo' => 'volta',
                'veiculo_id' => 2,
                'created_at' => '2023-09-01 10:13:51',
                'updated_at' => '2023-09-01 10:13:51',
            ),
            18 => 
            array (
                'id' => 19,
                'data' => '2023-09-01 12:16:00',
                'tipo' => 'ida',
                'veiculo_id' => 2,
                'created_at' => '2023-09-01 10:16:14',
                'updated_at' => '2023-09-01 10:16:14',
            ),
            19 => 
            array (
                'id' => 20,
                'data' => '2023-09-01 12:18:00',
                'tipo' => 'ida',
                'veiculo_id' => 2,
                'created_at' => '2023-09-01 10:18:57',
                'updated_at' => '2023-09-01 10:18:57',
            ),
        ));
        
        
    }
}