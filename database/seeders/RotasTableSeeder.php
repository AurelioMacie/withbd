<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RotasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rotas')->delete();
        
        \DB::table('rotas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'partida' => 'Malhazine',
                'destino' => 'Baixa',
                'descricao' => 'Avenida de mocambique',
                'created_at' => '2023-08-04 10:25:48',
                'updated_at' => '2023-08-04 10:25:48',
            ),
        ));
        
        
    }
}