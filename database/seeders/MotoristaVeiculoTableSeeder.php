<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MotoristaVeiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('motorista_veiculo')->delete();
        
        \DB::table('motorista_veiculo')->insert(array (
            0 => 
            array (
                'id' => 6,
                'estado' => NULL,
                'veiculo_id' => 4,
                'motorista_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'estado' => NULL,
                'veiculo_id' => 3,
                'motorista_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'estado' => NULL,
                'veiculo_id' => 2,
                'motorista_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 12,
                'estado' => NULL,
                'veiculo_id' => 10,
                'motorista_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 13,
                'estado' => NULL,
                'veiculo_id' => 11,
                'motorista_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'estado' => NULL,
                'veiculo_id' => 12,
                'motorista_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'estado' => NULL,
                'veiculo_id' => 13,
                'motorista_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'estado' => NULL,
                'veiculo_id' => 14,
                'motorista_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 17,
                'estado' => NULL,
                'veiculo_id' => 15,
                'motorista_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 20,
                'estado' => NULL,
                'veiculo_id' => 16,
                'motorista_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}