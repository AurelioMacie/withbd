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
                'remember_token' => 'Qz6Rw7MoVKW8UCxp4t8ASoPLqhkh8I5SIaGgKKrXOMksXEwBed8YPGpdV1W4',
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
                'remember_token' => 'QcqWttxpdygYNYJ3OPWQ6u0mi2QjKC19vYAvSsccmW7B0ixRWKq4moYFjkx8',
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-06 18:27:16',
                'updated_at' => '2023-08-06 20:20:55',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Almeida de Sousa',
                'email' => 'almeida@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/eTcgg/J5ahfW70/WVWIt.hLA0GeCFOdG5PxIZ9.mXcAVovBtz4cO',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:08:08',
                'updated_at' => '2023-08-16 11:08:08',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Josefa',
                'email' => 'josefa@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dCOs6NDMQN9do6cGk.3LBOwu9f.7akciOf/MF8avTXWqTUt85ecuq',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:08:56',
                'updated_at' => '2023-08-16 11:08:56',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 3,
                'name' => 'Manuelito',
                'email' => 'manuelito@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JeLSM7LQPkOLJz8.tO9xNuFLheaoE1v7zZQoVvmvGVTF5nnn.MU7C',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:09:26',
                'updated_at' => '2023-08-16 11:09:26',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 2,
                'name' => 'Joana Miguel',
                'email' => 'joana@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$w9hFbpkax2TRAxdWI0DQmu0/y6Kkslc8J8OXyxk1EFh4ILaCIRWK6',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:10:01',
                'updated_at' => '2023-08-16 11:10:01',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 3,
                'name' => 'Amilton Chiponde',
                'email' => 'amilton@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$h53lO5Av0MZYacNL9Tv6wO6.89K1h/SwCpvFms7O7eH2m4uNjEREO',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:10:33',
                'updated_at' => '2023-08-16 11:10:33',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 2,
                'name' => 'Noémia de Sousa',
                'email' => 'noemia@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KOAZ1UOkEzpfqMxRStbPuOlDNldKM8Ak3./ymcSYnAIfgXQbdMNfq',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:11:23',
                'updated_at' => '2023-08-16 11:11:23',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 3,
                'name' => 'José',
                'email' => 'jose@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8qU436witDC/xb6CRt6FTedxf5xFrt4/blAiQpuT8J3CBPCtngXaK',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:12:10',
                'updated_at' => '2023-08-16 11:12:10',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 3,
                'name' => 'Maicha',
                'email' => 'maicha@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dKMveYZhlftK6c52/OeHoe07bQOWleg8pX2UYPOnUryTl0xmHLB.a',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-16 11:12:54',
                'updated_at' => '2023-08-16 11:12:54',
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 3,
                'name' => 'Khalifa',
                'email' => 'khalifa@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$goKgUHsphiv03z4K4kqi8.M/QniJbQy2WYw18S82dpJo7a0iCcN.K',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-08-18 14:46:35',
                'updated_at' => '2023-08-18 14:46:35',
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 2,
                'name' => 'none',
                'email' => 'none@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2G5Wrxii6ZtLfwUP8tvsTe.1JTgyiL0ktuEm4AvHj2.O39Z2PzE2a',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-08-28 08:02:34',
                'updated_at' => '2023-08-28 08:02:34',
            ),
            13 => 
            array (
                'id' => 14,
                'role_id' => 3,
                'name' => 'Wanted',
                'email' => 'wanted@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PRQqKOEsrxxMUWTKyp9ml.fXOZYKjU2wV6gx76nWW7A.ApFoUNL4.',
                'remember_token' => NULL,
                'settings' => '{"locale":"pt"}',
                'created_at' => '2023-09-01 20:55:50',
                'updated_at' => '2023-09-01 20:55:50',
            ),
            14 => 
            array (
                'id' => 15,
                'role_id' => 2,
                'name' => 'Joha',
                'email' => 'joha@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FAOyX0OO5KyUvZCcAROF/OAX6hNBaSfBDpGsoi2nafoFEOa0UrKxG',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-09-05 10:49:39',
                'updated_at' => '2023-09-05 10:49:40',
            ),
            15 => 
            array (
                'id' => 16,
                'role_id' => 3,
                'name' => 'Claudio Simba',
                'email' => 'claudio@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$abSNtIN/VhXoeNdAsHv7L.CtV3EuuG89WgjPI3HThvmlBSVGN7NtS',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-09-11 06:26:54',
                'updated_at' => '2023-09-11 06:26:54',
            ),
        ));
        
        
    }
}