<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstudanteViagemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estudante_viagems')->delete();
        
        \DB::table('estudante_viagems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 1,
                'viagem_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'transferencia_viagem_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'horaSubida' => NULL,
                'horaDescida' => NULL,
                'estudante_id' => 1,
                'viagem_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'transferencia_viagem_id' => NULL,
            ),
        ));
        
        
    }
}