<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ViagemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('viagems')->delete();
        
        \DB::table('viagems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data' => '2023-08-06 00:00:00',
                'tipo' => 'Ida',
                'veiculo_id' => 2,
                'created_at' => '2023-08-06 19:30:08',
                'updated_at' => '2023-08-06 19:30:08',
            ),
            1 => 
            array (
                'id' => 2,
                'data' => '2023-08-06 00:00:00',
                'tipo' => 'Volta',
                'veiculo_id' => 2,
                'created_at' => '2023-08-06 19:31:30',
                'updated_at' => '2023-08-06 19:31:30',
            ),
        ));
        
        
    }
}