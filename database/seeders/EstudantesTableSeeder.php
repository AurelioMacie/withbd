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
                'descricaoSolicitacao' => 'Apenas precisa chegar ao destino em seguranca',
                'estado' => 'aceite',
                'rota_id' => 1,
                'veiculo_id' => 2,
                'created_at' => '2023-08-06 18:54:05',
                'updated_at' => '2023-08-08 14:34:17',
            ),
        ));
        
        
    }
}