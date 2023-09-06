<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstudanteViagemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estudante_viagem')->delete();
        
        
        
    }
}