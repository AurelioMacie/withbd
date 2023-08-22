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
            1 => 
            array (
                'id' => 4,
                'estado' => NULL,
                'veiculo_id' => 4,
                'motorista_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'estado' => NULL,
                'veiculo_id' => 3,
                'motorista_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 7,
                'estado' => NULL,
                'veiculo_id' => 5,
                'motorista_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'estado' => NULL,
                'veiculo_id' => 8,
                'motorista_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'estado' => NULL,
                'veiculo_id' => 9,
                'motorista_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'estado' => NULL,
                'veiculo_id' => 7,
                'motorista_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}