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
                'id' => 11,
                'descricao' => 'manutenção',
                'motorista_id' => 2,
                'created_at' => '2023-09-01 21:50:39',
                'updated_at' => '2023-09-01 21:50:39',
            ),
            2 => 
            array (
                'id' => 12,
                'descricao' => 'manutenção',
                'motorista_id' => 3,
                'created_at' => '2023-09-05 17:17:06',
                'updated_at' => '2023-09-05 17:17:06',
            ),
            3 => 
            array (
                'id' => 13,
                'descricao' => 'manutenção',
                'motorista_id' => 2,
                'created_at' => '2023-09-06 13:20:29',
                'updated_at' => '2023-09-06 13:20:29',
            ),
            4 => 
            array (
                'id' => 14,
                'descricao' => 'manutenção',
                'motorista_id' => 4,
                'created_at' => '2023-09-06 19:29:01',
                'updated_at' => '2023-09-06 19:29:01',
            ),
            5 => 
            array (
                'id' => 15,
                'descricao' => 'manutenção',
                'motorista_id' => 4,
                'created_at' => '2023-09-06 19:29:41',
                'updated_at' => '2023-09-06 19:29:41',
            ),
            6 => 
            array (
                'id' => 16,
                'descricao' => 'manutenção',
                'motorista_id' => 3,
                'created_at' => '2023-09-11 06:59:53',
                'updated_at' => '2023-09-11 06:59:53',
            ),
        ));
        
        
    }
}