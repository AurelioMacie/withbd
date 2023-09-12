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
                'id' => 35,
                'horaSubida' => '06:53:12',
                'horaDescida' => '06:53:43',
                'estudante_id' => 28,
                'viagem_id' => 23,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-11 06:50:36',
                'updated_at' => '2023-09-11 06:53:43',
            ),
            1 => 
            array (
                'id' => 36,
                'horaSubida' => '06:53:47',
                'horaDescida' => '06:53:53',
                'estudante_id' => 30,
                'viagem_id' => 23,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-11 06:50:36',
                'updated_at' => '2023-09-11 06:53:53',
            ),
            2 => 
            array (
                'id' => 37,
                'horaSubida' => '09:56:37',
                'horaDescida' => NULL,
                'estudante_id' => 29,
                'viagem_id' => 23,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-12 09:18:24',
                'updated_at' => '2023-09-12 09:56:37',
            ),
            3 => 
            array (
                'id' => 38,
                'horaSubida' => '09:26:45',
                'horaDescida' => '09:26:50',
                'estudante_id' => 28,
                'viagem_id' => 10,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-12 09:25:51',
                'updated_at' => '2023-09-12 09:26:50',
            ),
            4 => 
            array (
                'id' => 39,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 30,
                'viagem_id' => 10,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-12 09:26:11',
                'updated_at' => '2023-09-12 09:26:11',
            ),
        ));
        
        
    }
}