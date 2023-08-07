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
                'id' => 1,
                'descricao' => 'Aquilo',
                'motorista_id' => 1,
                'created_at' => '2023-08-07 18:35:30',
                'updated_at' => '2023-08-07 18:35:30',
            ),
        ));
        
        
    }
}