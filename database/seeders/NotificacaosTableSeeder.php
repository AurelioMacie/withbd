<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificacaosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notificacaos')->delete();
        
        \DB::table('notificacaos')->insert(array (
            0 => 
            array (
                'id' => 3,
                'mensagem' => 'foi adicionado o aluno Manú João Tsemba ao seu veiculo',
                'motorista_id' => 3,
                'created_at' => '2023-08-24 16:14:22',
                'updated_at' => '2023-08-24 16:14:22',
            ),
            1 => 
            array (
                'id' => 5,
                'mensagem' => 'foi adicionado o aluno Bola ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:42:21',
                'updated_at' => '2023-08-29 08:42:21',
            ),
            2 => 
            array (
                'id' => 6,
                'mensagem' => 'foi adicionado o aluno Júnior ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:42:48',
                'updated_at' => '2023-08-29 08:42:48',
            ),
            3 => 
            array (
                'id' => 7,
                'mensagem' => 'foi adicionado o aluno Manuel da Silva ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:43:03',
                'updated_at' => '2023-08-29 08:43:03',
            ),
            4 => 
            array (
                'id' => 8,
                'mensagem' => 'foi adicionado o aluno Amália de Sousa ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:43:20',
                'updated_at' => '2023-08-29 08:43:20',
            ),
            5 => 
            array (
                'id' => 9,
                'mensagem' => 'foi adicionado o aluno Ofélia Manjate ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:43:47',
                'updated_at' => '2023-08-29 08:43:47',
            ),
            6 => 
            array (
                'id' => 10,
                'mensagem' => 'foi adicionado o aluno Noé ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:57:59',
                'updated_at' => '2023-08-29 08:57:59',
            ),
            7 => 
            array (
                'id' => 11,
                'mensagem' => 'foi adicionado o aluno Baedier ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-31 16:30:40',
                'updated_at' => '2023-08-31 16:30:40',
            ),
            8 => 
            array (
                'id' => 15,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 08:49:08',
                'updated_at' => '2023-09-01 08:49:08',
            ),
            9 => 
            array (
                'id' => 17,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 09:04:30',
                'updated_at' => '2023-09-01 09:04:30',
            ),
            10 => 
            array (
                'id' => 18,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 09:05:48',
                'updated_at' => '2023-09-01 09:05:48',
            ),
            11 => 
            array (
                'id' => 19,
                'mensagem' => 'foi adicionado o aluno Carlos ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 20:50:14',
                'updated_at' => '2023-09-01 20:50:14',
            ),
            12 => 
            array (
                'id' => 21,
                'mensagem' => 'foi adicionado o aluno Dayse Macamo ao seu veículo',
                'motorista_id' => 3,
                'created_at' => '2023-09-05 16:45:36',
                'updated_at' => '2023-09-05 16:45:36',
            ),
            13 => 
            array (
                'id' => 22,
                'mensagem' => 'foi adicionado o aluno Kennedy Ussene ao seu veículo',
                'motorista_id' => 3,
                'created_at' => '2023-09-05 16:46:58',
                'updated_at' => '2023-09-05 16:46:58',
            ),
            14 => 
            array (
                'id' => 23,
                'mensagem' => 'foi adicionado o aluno Bila ao seu veículo',
                'motorista_id' => 3,
                'created_at' => '2023-09-05 16:47:16',
                'updated_at' => '2023-09-05 16:47:16',
            ),
            15 => 
            array (
                'id' => 24,
                'mensagem' => 'foi adicionado o aluno Rafael Dambuza ao seu veículo',
                'motorista_id' => 3,
                'created_at' => '2023-09-05 16:50:37',
                'updated_at' => '2023-09-05 16:50:37',
            ),
            16 => 
            array (
                'id' => 32,
                'mensagem' => 'foi adicionado o aluno Ganama Ioque ao seu veículo',
                'motorista_id' => 4,
                'created_at' => '2023-09-06 18:17:09',
                'updated_at' => '2023-09-06 18:17:09',
            ),
            17 => 
            array (
                'id' => 33,
                'mensagem' => 'foi adicionado o aluno Rafael Dambuza ao seu veículo',
                'motorista_id' => 4,
                'created_at' => '2023-09-06 18:17:47',
                'updated_at' => '2023-09-06 18:17:47',
            ),
            18 => 
            array (
                'id' => 34,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-09-06 18:38:43',
                'updated_at' => '2023-09-06 18:38:43',
            ),
            19 => 
            array (
                'id' => 35,
                'mensagem' => 'foi adicionado o aluno Lionardo Capaldi ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-09-06 18:39:46',
                'updated_at' => '2023-09-06 18:39:46',
            ),
        ));
        
        
    }
}