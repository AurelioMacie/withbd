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
                'id' => 1,
                'mensagem' => 'foi adicionado o aluno  ao seu veiculo',
                'motorista_id' => 3,
                'created_at' => '2023-08-24 16:08:48',
                'updated_at' => '2023-08-24 16:08:48',
            ),
            1 => 
            array (
                'id' => 2,
                'mensagem' => 'foi adicionado o aluno  ao seu veiculo',
                'motorista_id' => 3,
                'created_at' => '2023-08-24 16:09:50',
                'updated_at' => '2023-08-24 16:09:50',
            ),
            2 => 
            array (
                'id' => 3,
                'mensagem' => 'foi adicionado o aluno Manú João Tsemba ao seu veiculo',
                'motorista_id' => 3,
                'created_at' => '2023-08-24 16:14:22',
                'updated_at' => '2023-08-24 16:14:22',
            ),
            3 => 
            array (
                'id' => 4,
                'mensagem' => 'foi adicionado o aluno Júnior ao seu veículo',
                'motorista_id' => 1,
                'created_at' => '2023-08-24 18:19:05',
                'updated_at' => '2023-08-24 18:19:05',
            ),
        ));
        
        
    }
}