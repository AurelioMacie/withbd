<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Aurélio Macie',
                'email' => 'macie@gmail.com',
                'avatar' => 'users\\August2023\\QI66Xc3MSpCoD7rIHFJn.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GFCiT1lzfg268NB9tDWrGey6v/hQNfnVG.F5.NSqNg14IFV87LJO6',
                'remember_token' => 'oEDvKsXxjZKP0TdSATcTPP3akpFTwfaHOBrbWXW8wklPTTuHNejoFW2MfDZt',
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-04 09:39:16',
                'updated_at' => '2023-08-06 20:21:12',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Mateus',
                'email' => 'mateus@gmail.com',
                'avatar' => 'users\\August2023\\8CzsRN3WlsGvUNIOBWFx.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$D2/t8eSSKiv83DpBJR6HmeHzdUDo25qo8xQMimorzxHb75ZUL25s2',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-04 11:03:43',
                'updated_at' => '2023-08-06 20:42:50',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Nica',
                'email' => 'nica@gmail.com',
                'avatar' => 'users\\August2023\\6I1afCyWFH1zKIXoZcdb.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SWwlPVMYpSN/rx.Fd9J5qu5qyQ6BFJNvw47mvETGNxCATNo8HA2a.',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-06 18:27:16',
                'updated_at' => '2023-08-06 20:20:55',
            ),
        ));
        
        
    }
}