<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SolicitacaosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('solicitacaos')->delete();
        
        \DB::table('solicitacaos')->insert(array (
            0 => 
            array (
                'id' => 8,
                'descricao' => 'manutenção',
                'motorista_id' => 2,
                'created_at' => '2023-09-01 21:46:54',
                'updated_at' => '2023-09-01 21:46:54',
            ),
            1 => 
            array (
                'id' => 9,
                'descricao' => 'manutenção',
                'motorista_id' => NULL,
                'created_at' => '2023-09-01 21:49:41',
                'updated_at' => '2023-09-01 21:49:41',
            ),
            2 => 
            array (
                'id' => 10,
                'descricao' => 'manutenção',
                'motorista_id' => NULL,
                'created_at' => '2023-09-01 21:49:54',
                'updated_at' => '2023-09-01 21:49:54',
            ),
            3 => 
            array (
                'id' => 11,
                'descricao' => 'manutenção',
                'motorista_id' => 2,
                'created_at' => '2023-09-01 21:50:39',
                'updated_at' => '2023-09-01 21:50:39',
            ),
        ));
        
        
    }
}