<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstudantesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estudantes')->delete();
        
        \DB::table('estudantes')->insert(array (
            0 => 
            array (
                'id' => 20,
                'nome' => 'Rafael Dambuza',
                'partida' => 'Magoanine',
                'destino' => 'Bairro do aeroporto de maputo',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 15,
                'rota_id' => 3,
                'veiculo_id' => 12,
                'created_at' => '2023-09-05 16:49:55',
                'updated_at' => '2023-09-06 18:17:47',
            ),
            1 => 
            array (
                'id' => 25,
                'nome' => 'Ganama Ioque',
                'partida' => 'Magoanine',
                'destino' => 'Campus da UEM',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 3,
                'veiculo_id' => 12,
                'created_at' => '2023-09-06 17:50:42',
                'updated_at' => '2023-09-06 18:17:09',
            ),
            2 => 
            array (
                'id' => 26,
                'nome' => 'Benildo',
                'partida' => 'Malhazine',
                'destino' => 'Campus da UEM',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 3,
                'veiculo_id' => 11,
                'created_at' => '2023-09-06 18:21:06',
                'updated_at' => '2023-09-06 18:38:44',
            ),
            3 => 
            array (
                'id' => 27,
                'nome' => 'Lionardo Capaldi',
                'partida' => 'Magoanine',
                'destino' => 'Campus da UEM',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 3,
                'veiculo_id' => 11,
                'created_at' => '2023-09-06 18:39:27',
                'updated_at' => '2023-09-06 18:39:46',
            ),
            4 => 
            array (
                'id' => 28,
                'nome' => 'Moinho',
                'partida' => 'Aqui',
                'destino' => 'Ali',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => NULL,
                'user_id' => 1,
                'rota_id' => NULL,
                'veiculo_id' => NULL,
                'created_at' => '2023-09-06 18:40:08',
                'updated_at' => '2023-09-06 18:40:08',
            ),
        ));
        
        
    }
}