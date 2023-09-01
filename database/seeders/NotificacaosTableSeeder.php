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
                'id' => 12,
                'mensagem' => 'foi adicionado o aluno Arthur ao seu veículo',
                'motorista_id' => 4,
                'created_at' => '2023-08-31 16:37:44',
                'updated_at' => '2023-08-31 16:37:44',
            ),
            9 => 
            array (
                'id' => 13,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-08-31 16:45:07',
                'updated_at' => '2023-08-31 16:45:07',
            ),
            10 => 
            array (
                'id' => 14,
                'mensagem' => 'foi adicionado o aluno Baedier ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-08-31 16:45:37',
                'updated_at' => '2023-08-31 16:45:37',
            ),
            11 => 
            array (
                'id' => 15,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 08:49:08',
                'updated_at' => '2023-09-01 08:49:08',
            ),
            12 => 
            array (
                'id' => 16,
                'mensagem' => 'foi adicionado o aluno Arthur ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-09-01 09:02:17',
                'updated_at' => '2023-09-01 09:02:17',
            ),
            13 => 
            array (
                'id' => 17,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 09:04:30',
                'updated_at' => '2023-09-01 09:04:30',
            ),
            14 => 
            array (
                'id' => 18,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 09:05:48',
                'updated_at' => '2023-09-01 09:05:48',
            ),
            15 => 
            array (
                'id' => 19,
                'mensagem' => 'foi adicionado o aluno Carlos ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 20:50:14',
                'updated_at' => '2023-09-01 20:50:14',
            ),
            16 => 
            array (
                'id' => 20,
                'mensagem' => 'foi adicionado o aluno Arthur ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-09-01 21:03:54',
                'updated_at' => '2023-09-01 21:03:54',
            ),
        ));
        
        
    }
}