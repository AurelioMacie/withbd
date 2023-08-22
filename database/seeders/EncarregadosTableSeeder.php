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
            1 => 
            array (
                'id' => 3,
                'parentesco' => 'Mãe',
                'user_id' => 9,
                'estudante_id' => 7,
                'created_at' => NULL,
                'updated_at' => '2023-08-16 12:06:24',
            ),
            2 => 
            array (
                'id' => 5,
                'parentesco' => 'Irmã',
                'user_id' => 7,
                'estudante_id' => 3,
                'created_at' => '2023-08-16 12:10:26',
                'updated_at' => '2023-08-16 12:10:26',
            ),
            3 => 
            array (
                'id' => 6,
                'parentesco' => 'Irmã',
                'user_id' => 7,
                'estudante_id' => 3,
                'created_at' => '2023-08-16 12:10:27',
                'updated_at' => '2023-08-16 12:10:27',
            ),
            4 => 
            array (
                'id' => 7,
                'parentesco' => NULL,
                'user_id' => 4,
                'estudante_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'parentesco' => NULL,
                'user_id' => 5,
                'estudante_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}