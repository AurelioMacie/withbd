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
                'id' => 54,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 34,
                'viagem_id' => 29,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-13 10:40:44',
                'updated_at' => '2023-09-13 10:40:44',
            ),
            1 => 
            array (
                'id' => 55,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 35,
                'viagem_id' => 29,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-13 10:40:44',
                'updated_at' => '2023-09-13 10:40:44',
            ),
            2 => 
            array (
                'id' => 56,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 36,
                'viagem_id' => 29,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-13 10:40:45',
                'updated_at' => '2023-09-13 10:40:45',
            ),
        ));
        
        
    }
}