<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2023-08-04 09:39:06',
                'updated_at' => '2023-08-04 09:39:06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2023-08-04 09:39:06',
                'updated_at' => '2023-08-04 09:39:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'motorista',
                'display_name' => 'Motorista',
                'created_at' => '2023-08-04 11:00:35',
                'updated_at' => '2023-08-04 11:00:48',
            ),
        ));
        
        
    }
}