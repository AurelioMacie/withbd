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
                'id' => 1,
                'nome' => 'Maira',
                'partida' => 'Zimpeto',
                'destino' => 'Josina Machel',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 5,
                'veiculo_id' => 7,
                'created_at' => '2023-08-06 18:54:05',
                'updated_at' => '2023-08-21 09:53:23',
            ),
            1 => 
            array (
                'id' => 3,
                'nome' => 'Antanás Jossias',
                'partida' => 'Malhazine',
                'destino' => 'Escola Secundária de Magoanine',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 2,
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 10:54:49',
                'updated_at' => '2023-08-17 09:28:02',
            ),
            2 => 
            array (
                'id' => 4,
                'nome' => 'Ofélia Manjate',
                'partida' => 'Zimpeto',
                'destino' => 'Escola Secundária de Malhazine',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 3,
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 10:55:47',
                'updated_at' => '2023-08-24 16:18:12',
            ),
            3 => 
            array (
                'id' => 5,
                'nome' => 'Amália de Sousa',
                'partida' => 'Magoanine',
                'destino' => 'Escola Secundária Josina Machel',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 5,
                'veiculo_id' => 7,
                'created_at' => '2023-08-16 10:56:18',
                'updated_at' => '2023-08-21 09:54:57',
            ),
            4 => 
            array (
                'id' => 6,
                'nome' => 'Manuel da Silva',
                'partida' => 'Museu',
                'destino' => 'Escola Secundária da Zona Verde',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 4,
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 11:02:57',
                'updated_at' => '2023-08-24 16:16:18',
            ),
            5 => 
            array (
                'id' => 7,
                'nome' => 'Manú João Tsemba',
                'partida' => 'Hulene',
                'destino' => 'Escola Secundária de Josina Machel',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 5,
                'veiculo_id' => 7,
                'created_at' => '2023-08-16 11:03:53',
                'updated_at' => '2023-08-21 09:54:05',
            ),
            6 => 
            array (
                'id' => 8,
                'nome' => 'Júnior',
                'partida' => 'Paragem de Malhazine',
                'destino' => 'Escola Secundaria de Lhanguene',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 1,
                'veiculo_id' => 9,
                'created_at' => '2023-08-24 18:14:04',
                'updated_at' => '2023-08-24 18:19:05',
            ),
        ));
        
        
    }
}