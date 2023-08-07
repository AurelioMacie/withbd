<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MotoristasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('motoristas')->delete();
        
        \DB::table('motoristas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Mateus Matias',
                'contacto' => '+258 867676788',
                'documento' => '1111111111111111111',
                'morada' => 'Malhazine, Rua 1',
                'nascimento' => '2023-07-30',
                'user_id' => 2,
                'created_at' => '2023-08-06 18:25:00',
                'updated_at' => '2023-08-06 20:10:52',
            ),
        ));
        
        
    }
}