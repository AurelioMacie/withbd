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
                'id' => 56,
                'horaSubida' => '08:25:44',
                'horaDescida' => '08:25:47',
                'estudante_id' => 36,
                'viagem_id' => 29,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-13 10:40:45',
                'updated_at' => '2023-09-14 08:25:47',
            ),
            1 => 
            array (
                'id' => 57,
                'horaSubida' => '08:51:10',
                'horaDescida' => '08:51:13',
                'estudante_id' => 36,
                'viagem_id' => 28,
                'transferencia_viagem_id' => NULL,
                'created_at' => '2023-09-14 08:49:33',
                'updated_at' => '2023-09-14 08:51:13',
            ),
        ));
        
        
    }
}