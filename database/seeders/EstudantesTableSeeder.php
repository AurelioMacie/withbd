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
                'destino' => 'Baixa',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 1,
                'veiculo_id' => 2,
                'created_at' => '2023-08-06 18:54:05',
                'updated_at' => '2023-08-16 10:56:52',
            ),
            1 => 
            array (
                'id' => 3,
                'nome' => 'Antanás Jossias',
                'partida' => 'Malhazine',
                'destino' => 'Escola Secundária de Magoanine',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'pendente',
                'rota_id' => NULL,
                'veiculo_id' => NULL,
                'created_at' => '2023-08-16 10:54:49',
                'updated_at' => '2023-08-16 10:57:19',
            ),
            2 => 
            array (
                'id' => 4,
                'nome' => 'Ofélia Manjate',
                'partida' => 'Zimpeto',
                'destino' => 'Escola Secundária de Malhazine',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => NULL,
                'rota_id' => NULL,
                'veiculo_id' => NULL,
                'created_at' => '2023-08-16 10:55:47',
                'updated_at' => '2023-08-16 10:55:47',
            ),
            3 => 
            array (
                'id' => 5,
                'nome' => 'Amália de Sousa',
                'partida' => 'Magoanine',
                'destino' => 'Museu',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => NULL,
                'rota_id' => NULL,
                'veiculo_id' => NULL,
                'created_at' => '2023-08-16 10:56:18',
                'updated_at' => '2023-08-16 10:56:18',
            ),
            4 => 
            array (
                'id' => 6,
                'nome' => 'Manuel da Silva',
                'partida' => 'Museu',
                'destino' => 'Baixa',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => NULL,
                'rota_id' => NULL,
                'veiculo_id' => NULL,
                'created_at' => '2023-08-16 11:02:57',
                'updated_at' => '2023-08-16 11:02:57',
            ),
            5 => 
            array (
                'id' => 7,
                'nome' => 'Manú João Tsemba',
                'partida' => 'Hulene',
                'destino' => 'Escola Secundária de Malhazine',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'rota_id' => 1,
                'veiculo_id' => 2,
                'created_at' => '2023-08-16 11:03:53',
                'updated_at' => '2023-08-16 12:04:57',
            ),
        ));
        
        
    }
}