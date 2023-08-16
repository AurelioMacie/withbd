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
            1 => 
            array (
                'id' => 2,
                'partida' => '3 de fevereiro',
                'destino' => 'Xipamanine',
                'descricao' => 'XP-3Fe via avenida de moçambique',
                'created_at' => '2023-08-16 10:48:50',
                'updated_at' => '2023-08-16 10:48:50',
            ),
            2 => 
            array (
                'id' => 3,
                'partida' => 'Malhazine',
                'destino' => 'Museu',
                'descricao' => 'Julius Nyerere',
                'created_at' => '2023-08-16 10:49:16',
                'updated_at' => '2023-08-16 10:49:16',
            ),
            3 => 
            array (
                'id' => 4,
                'partida' => 'Bairro de T3',
                'destino' => 'Praça dos combatentes',
                'descricao' => 'Avenida de mocambique, junto à avenida de lurdes mutola e julius nyerere',
                'created_at' => '2023-08-16 10:50:58',
                'updated_at' => '2023-08-16 10:50:58',
            ),
            4 => 
            array (
                'id' => 5,
                'partida' => 'Junta',
                'destino' => 'Magoanine',
                'descricao' => 'Via FPLP',
                'created_at' => '2023-08-16 10:52:26',
                'updated_at' => '2023-08-16 10:52:26',
            ),
            5 => 
            array (
                'id' => 6,
                'partida' => 'CMC',
                'destino' => 'Magoanine',
                'descricao' => 'Estrada das mahotas',
                'created_at' => '2023-08-16 10:53:00',
                'updated_at' => '2023-08-16 10:53:16',
            ),
        ));
        
        
    }
}