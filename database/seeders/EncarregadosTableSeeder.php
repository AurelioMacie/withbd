<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EncarregadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('encarregados')->delete();
        
        \DB::table('encarregados')->insert(array (
            0 => 
            array (
                'id' => 2,
                'parentesco' => 'Pai',
                'user_id' => 2,
                'estudante_id' => 1,
                'created_at' => '2023-08-07 18:34:48',
                'updated_at' => '2023-08-07 18:34:48',
            ),
        ));
        
        
    }
}