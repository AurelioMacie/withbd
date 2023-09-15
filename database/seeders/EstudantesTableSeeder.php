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
                'id' => 29,
                'nome' => 'Jossay Guedes',
                'partida' => 'Benfica',
                'destino' => 'Universidade Pedagogica',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 3,
                'rota_id' => 5,
                'veiculo_id' => 13,
                'created_at' => '2023-09-11 06:36:19',
                'updated_at' => '2023-09-11 06:39:50',
            ),
            5 => 
            array (
                'id' => 31,
                'nome' => 'Fazila Moira',
                'partida' => 'Malhazine',
                'destino' => 'Escola Secundaria de Lhanguene',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 3,
                'rota_id' => 5,
                'veiculo_id' => 13,
                'created_at' => '2023-09-11 06:41:16',
                'updated_at' => '2023-09-11 06:42:26',
            ),
            6 => 
            array (
                'id' => 36,
                'nome' => 'Clayton Davidisson',
                'partida' => 'Malhazine',
                'destino' => 'Baixa',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 5,
                'veiculo_id' => 14,
                'created_at' => '2023-09-13 10:29:38',
                'updated_at' => '2023-09-15 10:26:50',
            ),
            7 => 
            array (
                'id' => 37,
                'nome' => 'Amrildo Changai',
                'partida' => 'Payol',
                'destino' => 'Escola Secundaria do infulene',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 5,
                'veiculo_id' => 16,
                'created_at' => '2023-09-13 10:30:43',
                'updated_at' => '2023-09-13 10:31:48',
            ),
            8 => 
            array (
                'id' => 38,
                'nome' => 'Manila Sitoe',
                'partida' => 'Lhanguene',
                'destino' => 'Escola Secundaria da Manhanga',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 1,
                'veiculo_id' => 2,
                'created_at' => '2023-09-13 10:32:31',
                'updated_at' => '2023-09-15 10:00:41',
            ),
            9 => 
            array (
                'id' => 39,
                'nome' => 'Khalid Macie',
                'partida' => 'Posto 19',
                'destino' => 'Escola Secundaria de Lhanguene',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 5,
                'veiculo_id' => 14,
                'created_at' => '2023-09-13 10:33:16',
                'updated_at' => '2023-09-14 08:35:33',
            ),
            10 => 
            array (
                'id' => 40,
                'nome' => 'Judite Give',
                'partida' => 'Choupal',
                'destino' => 'Escola Secundaria de Lhanguene',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 3,
                'rota_id' => 5,
                'veiculo_id' => 14,
                'created_at' => '2023-09-14 08:11:43',
                'updated_at' => '2023-09-14 08:36:58',
            ),
            11 => 
            array (
                'id' => 41,
                'nome' => 'sadsadsd',
                'partida' => 'sdfdsfdsf',
                'destino' => 'dsfdsfdsfds',
                'descricaoSolicitacao' => 'Sem descrição',
                'estado' => 'aceite',
                'user_id' => 1,
                'rota_id' => 5,
                'veiculo_id' => 16,
                'created_at' => '2023-09-15 10:27:10',
                'updated_at' => '2023-09-15 10:28:13',
            ),
        ));
        
        
    }
}