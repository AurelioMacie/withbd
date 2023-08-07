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
                'descricaoSolicitacao' => 'Nenhuma',
                'estado' => NULL,
                'rota_id' => NULL,
                'veiculo_id' => NULL,
                'created_at' => '2023-08-06 18:54:05',
                'updated_at' => '2023-08-06 18:54:05',
            ),
        ));
        
        
    }
}