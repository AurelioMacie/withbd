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
                'id' => 5,
                'mensagem' => 'foi adicionado o aluno Bola ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:42:21',
                'updated_at' => '2023-08-29 08:42:21',
            ),
            1 => 
            array (
                'id' => 6,
                'mensagem' => 'foi adicionado o aluno Júnior ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:42:48',
                'updated_at' => '2023-08-29 08:42:48',
            ),
            2 => 
            array (
                'id' => 7,
                'mensagem' => 'foi adicionado o aluno Manuel da Silva ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:43:03',
                'updated_at' => '2023-08-29 08:43:03',
            ),
            3 => 
            array (
                'id' => 8,
                'mensagem' => 'foi adicionado o aluno Amália de Sousa ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:43:20',
                'updated_at' => '2023-08-29 08:43:20',
            ),
            4 => 
            array (
                'id' => 9,
                'mensagem' => 'foi adicionado o aluno Ofélia Manjate ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:43:47',
                'updated_at' => '2023-08-29 08:43:47',
            ),
            5 => 
            array (
                'id' => 10,
                'mensagem' => 'foi adicionado o aluno Noé ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-29 08:57:59',
                'updated_at' => '2023-08-29 08:57:59',
            ),
            6 => 
            array (
                'id' => 11,
                'mensagem' => 'foi adicionado o aluno Baedier ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-31 16:30:40',
                'updated_at' => '2023-08-31 16:30:40',
            ),
            7 => 
            array (
                'id' => 15,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 08:49:08',
                'updated_at' => '2023-09-01 08:49:08',
            ),
            8 => 
            array (
                'id' => 17,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 09:04:30',
                'updated_at' => '2023-09-01 09:04:30',
            ),
            9 => 
            array (
                'id' => 18,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 09:05:48',
                'updated_at' => '2023-09-01 09:05:48',
            ),
            10 => 
            array (
                'id' => 19,
                'mensagem' => 'foi adicionado o aluno Carlos ao seu veículo',
                'motorista_id' => 6,
                'created_at' => '2023-09-01 20:50:14',
                'updated_at' => '2023-09-01 20:50:14',
            ),
            11 => 
            array (
                'id' => 32,
                'mensagem' => 'foi adicionado o aluno Ganama Ioque ao seu veículo',
                'motorista_id' => 4,
                'created_at' => '2023-09-06 18:17:09',
                'updated_at' => '2023-09-06 18:17:09',
            ),
            12 => 
            array (
                'id' => 33,
                'mensagem' => 'foi adicionado o aluno Rafael Dambuza ao seu veículo',
                'motorista_id' => 4,
                'created_at' => '2023-09-06 18:17:47',
                'updated_at' => '2023-09-06 18:17:47',
            ),
            13 => 
            array (
                'id' => 34,
                'mensagem' => 'foi adicionado o aluno Benildo ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-09-06 18:38:43',
                'updated_at' => '2023-09-06 18:38:43',
            ),
            14 => 
            array (
                'id' => 35,
                'mensagem' => 'foi adicionado o aluno Lionardo Capaldi ao seu veículo',
                'motorista_id' => 2,
                'created_at' => '2023-09-06 18:39:46',
                'updated_at' => '2023-09-06 18:39:46',
            ),
            15 => 
            array (
                'id' => 36,
                'mensagem' => 'foi adicionado o aluno Moinho ao seu veículo',
                'motorista_id' => 3,
                'created_at' => '2023-09-11 06:32:17',
                'updated_at' => '2023-09-11 06:32:17',
            ),
            16 => 
            array (
                'id' => 37,
                'mensagem' => 'foi adicionado o aluno Razia Fandila ao seu veículo',
                'motorista_id' => 3,
                'created_at' => '2023-09-11 06:39:18',
                'updated_at' => '2023-09-11 06:39:18',
            ),
            17 => 
            array (
                'id' => 38,
                'mensagem' => 'foi adicionado o aluno Jossay Guedes ao seu veículo',
                'motorista_id' => 8,
                'created_at' => '2023-09-11 06:39:50',
                'updated_at' => '2023-09-11 06:39:50',
            ),
            18 => 
            array (
                'id' => 39,
                'mensagem' => 'foi adicionado o aluno Fazila Moira ao seu veículo',
                'motorista_id' => 8,
                'created_at' => '2023-09-11 06:42:26',
                'updated_at' => '2023-09-11 06:42:26',
            ),
            19 => 
            array (
                'id' => 40,
                'mensagem' => 'foi adicionado o aluno Judite Give ao seu veículo',
                'motorista_id' => 9,
                'created_at' => '2023-09-13 09:47:08',
                'updated_at' => '2023-09-13 09:47:08',
            ),
            20 => 
            array (
                'id' => 41,
                'mensagem' => 'foi adicionado o aluno Kambal Muzimba ao seu veículo',
                'motorista_id' => 9,
                'created_at' => '2023-09-13 09:47:39',
                'updated_at' => '2023-09-13 09:47:39',
            ),
            21 => 
            array (
                'id' => 42,
                'mensagem' => 'foi adicionado o aluno Clayton Davidisson ao seu veículo',
                'motorista_id' => 11,
                'created_at' => '2023-09-13 10:29:55',
                'updated_at' => '2023-09-13 10:29:55',
            ),
            22 => 
            array (
                'id' => 43,
                'mensagem' => 'foi adicionado o aluno Amrildo Changai ao seu veículo',
                'motorista_id' => 11,
                'created_at' => '2023-09-13 10:31:48',
                'updated_at' => '2023-09-13 10:31:48',
            ),
            23 => 
            array (
                'id' => 44,
                'mensagem' => 'foi adicionado o aluno Khalid Macie ao seu veículo',
                'motorista_id' => 9,
                'created_at' => '2023-09-14 08:35:32',
                'updated_at' => '2023-09-14 08:35:32',
            ),
            24 => 
            array (
                'id' => 45,
                'mensagem' => 'foi adicionado o aluno Judite Give ao seu veículo',
                'motorista_id' => 9,
                'created_at' => '2023-09-14 08:36:57',
                'updated_at' => '2023-09-14 08:36:57',
            ),
            25 => 
            array (
                'id' => 46,
                'mensagem' => 'foi adicionado o aluno Manila Sitoe ao seu veículo',
                'motorista_id' => 7,
                'created_at' => '2023-09-15 10:00:41',
                'updated_at' => '2023-09-15 10:00:41',
            ),
            26 => 
            array (
                'id' => 47,
                'mensagem' => 'foi adicionado o aluno Clayton Davidisson ao seu veículo',
                'motorista_id' => 8,
                'created_at' => '2023-09-15 10:24:59',
                'updated_at' => '2023-09-15 10:24:59',
            ),
            27 => 
            array (
                'id' => 48,
                'mensagem' => 'foi adicionado o aluno Clayton Davidisson ao seu veículo',
                'motorista_id' => 9,
                'created_at' => '2023-09-15 10:26:50',
                'updated_at' => '2023-09-15 10:26:50',
            ),
            28 => 
            array (
                'id' => 49,
                'mensagem' => 'foi adicionado o aluno sadsadsd ao seu veículo',
                'motorista_id' => 8,
                'created_at' => '2023-09-15 10:27:50',
                'updated_at' => '2023-09-15 10:27:50',
            ),
            29 => 
            array (
                'id' => 50,
                'mensagem' => 'foi adicionado o aluno sadsadsd ao seu veículo',
                'motorista_id' => 11,
                'created_at' => '2023-09-15 10:28:13',
                'updated_at' => '2023-09-15 10:28:13',
            ),
        ));
        
        
    }
}