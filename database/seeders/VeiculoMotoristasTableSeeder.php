<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VeiculoMotoristasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('veiculo_motoristas')->delete();
        
        \DB::table('veiculo_motoristas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estado' => 1,
                'veiculo_id' => 2,
                'motorista_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-08-06 19:26:46',
            ),
        ));
        
        
    }
}