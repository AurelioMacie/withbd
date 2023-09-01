<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstudanteViagemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estudante_viagem')->delete();
        
        \DB::table('estudante_viagem')->insert(array (
            0 => 
            array (
                'id' => 9,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 1,
                'viagem_id' => 9,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-18 15:04:14',
                'updated_at' => '2023-08-18 15:04:14',
            ),
            1 => 
            array (
                'id' => 10,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 3,
                'viagem_id' => 9,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-18 15:04:14',
                'updated_at' => '2023-08-18 15:04:14',
            ),
            2 => 
            array (
                'id' => 11,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 4,
                'viagem_id' => 9,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-18 15:04:14',
                'updated_at' => '2023-08-18 15:04:14',
            ),
            3 => 
            array (
                'id' => 12,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 5,
                'viagem_id' => 9,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-18 15:04:14',
                'updated_at' => '2023-08-18 15:04:14',
            ),
            4 => 
            array (
                'id' => 13,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 6,
                'viagem_id' => 9,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-18 15:04:14',
                'updated_at' => '2023-08-18 15:04:14',
            ),
            5 => 
            array (
                'id' => 14,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 7,
                'viagem_id' => 9,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-18 15:04:14',
                'updated_at' => '2023-08-18 15:04:14',
            ),
            6 => 
            array (
                'id' => 15,
                'horaSubida' => '07:42:26',
                'horaDescida' => '08:00:40',
                'estudante_id' => 3,
                'viagem_id' => 8,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-20 18:22:15',
                'updated_at' => '2023-08-21 08:00:40',
            ),
            7 => 
            array (
                'id' => 16,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 4,
                'viagem_id' => 8,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-20 18:22:15',
                'updated_at' => '2023-08-20 18:22:15',
            ),
            8 => 
            array (
                'id' => 19,
                'horaSubida' => '08:22:30',
                'horaDescida' => '08:22:33',
                'estudante_id' => 1,
                'viagem_id' => 10,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-21 08:21:56',
                'updated_at' => '2023-08-21 08:22:33',
            ),
            9 => 
            array (
                'id' => 20,
                'horaSubida' => '10:03:36',
                'horaDescida' => '10:03:52',
                'estudante_id' => 5,
                'viagem_id' => 10,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-21 09:57:47',
                'updated_at' => '2023-08-21 10:03:52',
            ),
            10 => 
            array (
                'id' => 21,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 1,
                'viagem_id' => 11,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-21 10:02:00',
                'updated_at' => '2023-08-21 10:02:00',
            ),
            11 => 
            array (
                'id' => 22,
                'horaSubida' => '10:03:45',
                'horaDescida' => '10:03:57',
                'estudante_id' => 7,
                'viagem_id' => 10,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-08-21 10:03:04',
                'updated_at' => '2023-08-21 10:03:57',
            ),
            12 => 
            array (
                'id' => 23,
                'horaSubida' => '10:21:10',
                'horaDescida' => '10:21:13',
                'estudante_id' => 1,
                'viagem_id' => 20,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-01 10:20:57',
                'updated_at' => '2023-09-01 10:21:13',
            ),
            13 => 
            array (
                'id' => 24,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 3,
                'viagem_id' => 20,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-01 10:20:57',
                'updated_at' => '2023-09-01 10:20:57',
            ),
            14 => 
            array (
                'id' => 25,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 4,
                'viagem_id' => 20,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-01 10:20:57',
                'updated_at' => '2023-09-01 10:20:57',
            ),
            15 => 
            array (
                'id' => 26,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 5,
                'viagem_id' => 20,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-01 10:20:57',
                'updated_at' => '2023-09-01 10:20:57',
            ),
            16 => 
            array (
                'id' => 27,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 6,
                'viagem_id' => 20,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-01 10:20:57',
                'updated_at' => '2023-09-01 10:20:57',
            ),
            17 => 
            array (
                'id' => 28,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 15,
                'viagem_id' => 9,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-01 21:53:41',
                'updated_at' => '2023-09-01 21:53:41',
            ),
        ));
        
        
    }
}