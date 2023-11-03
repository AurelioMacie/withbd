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
                'documento' => '1111111111',
                'morada' => 'Malhazine, Rua 1',
                'nascimento' => '1997-09-17',
                'user_id' => 2,
                'created_at' => '2023-08-06 18:25:00',
                'updated_at' => '2023-08-29 08:37:50',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Almeida de Sousa',
                'contacto' => '876543234',
                'documento' => '323232323',
                'morada' => 'Mateque 16km',
                'nascimento' => '1998-03-10',
                'user_id' => 4,
                'created_at' => '2023-08-16 11:06:00',
                'updated_at' => '2023-08-16 11:50:40',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Manica',
                'contacto' => '876565657',
                'documento' => '124214454534',
                'morada' => 'Zona Verde',
                'nascimento' => '2000-07-06',
                'user_id' => 11,
                'created_at' => '2023-08-16 11:18:00',
                'updated_at' => '2023-09-13 09:06:59',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'José',
                'contacto' => '878787878',
                'documento' => '324354566',
                'morada' => 'Praça dos combatentes',
                'nascimento' => '2000-02-08',
                'user_id' => 10,
                'created_at' => '2023-08-16 11:40:00',
                'updated_at' => '2023-08-29 08:38:14',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Amilton',
                'contacto' => '876509876',
                'documento' => '44367867878',
                'morada' => 'Makefwe',
                'nascimento' => '2000-01-01',
                'user_id' => 8,
                'created_at' => '2023-08-16 11:48:40',
                'updated_at' => '2023-08-16 11:48:40',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Khalifa',
                'contacto' => '834354654',
                'documento' => '136809865',
                'morada' => 'Bairro do Jardim',
                'nascimento' => '1986-03-04',
                'user_id' => 12,
                'created_at' => '2023-08-18 14:50:00',
                'updated_at' => '2023-09-01 07:34:06',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Wanted Carlos',
                'contacto' => '34265756756',
                'documento' => '231535',
                'morada' => 'Zimpeto',
                'nascimento' => '2023-09-02',
                'user_id' => 14,
                'created_at' => '2023-09-01 20:58:54',
                'updated_at' => '2023-09-01 20:58:54',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Claudio Simba',
                'contacto' => '876565678',
                'documento' => '76889007866',
                'morada' => 'Malhazine',
                'nascimento' => '1998-02-10',
                'user_id' => 16,
                'created_at' => '2023-09-11 06:26:00',
                'updated_at' => '2023-09-11 06:27:18',
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Eucilio Moane',
                'contacto' => '878987654',
                'documento' => '2323545',
                'morada' => 'Bairro George Dimitrov',
                'nascimento' => '2000-02-03',
                'user_id' => 17,
                'created_at' => '2023-09-13 09:36:00',
                'updated_at' => '2023-09-13 09:36:00',
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Alita Miole',
                'contacto' => '866789000',
                'documento' => '123236634',
                'morada' => 'Malhazine',
                'nascimento' => '2001-01-01',
                'user_id' => 18,
                'created_at' => '2023-09-13 09:41:32',
                'updated_at' => '2023-09-13 09:41:32',
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Bonaho',
                'contacto' => '836878090',
                'documento' => '2356867876',
                'morada' => 'Avenida do Trabalho',
                'nascimento' => '1996-11-14',
                'user_id' => 19,
                'created_at' => '2023-09-13 10:26:49',
                'updated_at' => '2023-09-13 10:26:49',
            ),
            11 => 
            array (
                'id' => 12,
                'nome' => 'Roberto Macuacua',
                'contacto' => '876568778',
                'documento' => '123245645',
                'morada' => 'Benfica',
                'nascimento' => '1990-07-15',
                'user_id' => 20,
                'created_at' => '2023-09-15 16:56:17',
                'updated_at' => '2023-09-15 16:59:22',
            ),
        ));
        
        
    }
}