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
        ));
        
        
    }
}