<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MultasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('multas')->delete();
        
        \DB::table('multas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'referencia' => 'sdf232313\\h',
                'valor' => 1334.0,
                'motorista_id' => 1,
                'created_at' => '2023-08-06 19:23:20',
                'updated_at' => '2023-08-06 19:23:20',
            ),
            1 => 
            array (
                'id' => 2,
                'referencia' => 'Kinsdfskj',
                'valor' => 1500.0,
                'motorista_id' => 1,
                'created_at' => '2023-08-06 20:46:58',
                'updated_at' => '2023-08-06 20:46:58',
            ),
        ));
        
        
    }
}