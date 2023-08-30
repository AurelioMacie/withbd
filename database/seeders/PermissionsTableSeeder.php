<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2023-08-04 09:39:07',
                'updated_at' => '2023-08-04 09:39:07',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2023-08-04 09:39:08',
                'updated_at' => '2023-08-04 09:39:08',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2023-08-04 09:39:09',
                'updated_at' => '2023-08-04 09:39:09',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2023-08-04 09:39:10',
                'updated_at' => '2023-08-04 09:39:10',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2023-08-04 09:39:10',
                'updated_at' => '2023-08-04 09:39:10',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2023-08-04 09:39:14',
                'updated_at' => '2023-08-04 09:39:14',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2023-08-04 09:39:14',
                'updated_at' => '2023-08-04 09:39:14',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2023-08-04 09:39:14',
                'updated_at' => '2023-08-04 09:39:14',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2023-08-04 09:39:14',
                'updated_at' => '2023-08-04 09:39:14',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2023-08-04 09:39:15',
                'updated_at' => '2023-08-04 09:39:15',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2023-08-04 09:39:17',
                'updated_at' => '2023-08-04 09:39:17',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2023-08-04 09:39:17',
                'updated_at' => '2023-08-04 09:39:17',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2023-08-04 09:39:17',
                'updated_at' => '2023-08-04 09:39:17',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2023-08-04 09:39:17',
                'updated_at' => '2023-08-04 09:39:17',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2023-08-04 09:39:17',
                'updated_at' => '2023-08-04 09:39:17',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2023-08-04 09:39:19',
                'updated_at' => '2023-08-04 09:39:19',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2023-08-04 09:39:19',
                'updated_at' => '2023-08-04 09:39:19',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2023-08-04 09:39:19',
                'updated_at' => '2023-08-04 09:39:19',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2023-08-04 09:39:19',
                'updated_at' => '2023-08-04 09:39:19',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2023-08-04 09:39:19',
                'updated_at' => '2023-08-04 09:39:19',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_rotas',
                'table_name' => 'rotas',
                'created_at' => '2023-08-04 09:43:51',
                'updated_at' => '2023-08-04 09:43:51',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_rotas',
                'table_name' => 'rotas',
                'created_at' => '2023-08-04 09:43:51',
                'updated_at' => '2023-08-04 09:43:51',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_rotas',
                'table_name' => 'rotas',
                'created_at' => '2023-08-04 09:43:51',
                'updated_at' => '2023-08-04 09:43:51',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_rotas',
                'table_name' => 'rotas',
                'created_at' => '2023-08-04 09:43:51',
                'updated_at' => '2023-08-04 09:43:51',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_rotas',
                'table_name' => 'rotas',
                'created_at' => '2023-08-04 09:43:51',
                'updated_at' => '2023-08-04 09:43:51',
            ),
            45 => 
            array (
                'id' => 56,
                'key' => 'browse_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2023-08-04 10:13:51',
                'updated_at' => '2023-08-04 10:13:51',
            ),
            46 => 
            array (
                'id' => 57,
                'key' => 'read_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2023-08-04 10:13:51',
                'updated_at' => '2023-08-04 10:13:51',
            ),
            47 => 
            array (
                'id' => 58,
                'key' => 'edit_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2023-08-04 10:13:51',
                'updated_at' => '2023-08-04 10:13:51',
            ),
            48 => 
            array (
                'id' => 59,
                'key' => 'add_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2023-08-04 10:13:51',
                'updated_at' => '2023-08-04 10:13:51',
            ),
            49 => 
            array (
                'id' => 60,
                'key' => 'delete_estudantes',
                'table_name' => 'estudantes',
                'created_at' => '2023-08-04 10:13:51',
                'updated_at' => '2023-08-04 10:13:51',
            ),
            50 => 
            array (
                'id' => 61,
                'key' => 'browse_motoristas',
                'table_name' => 'motoristas',
                'created_at' => '2023-08-04 10:14:57',
                'updated_at' => '2023-08-04 10:14:57',
            ),
            51 => 
            array (
                'id' => 62,
                'key' => 'read_motoristas',
                'table_name' => 'motoristas',
                'created_at' => '2023-08-04 10:14:57',
                'updated_at' => '2023-08-04 10:14:57',
            ),
            52 => 
            array (
                'id' => 63,
                'key' => 'edit_motoristas',
                'table_name' => 'motoristas',
                'created_at' => '2023-08-04 10:14:57',
                'updated_at' => '2023-08-04 10:14:57',
            ),
            53 => 
            array (
                'id' => 64,
                'key' => 'add_motoristas',
                'table_name' => 'motoristas',
                'created_at' => '2023-08-04 10:14:57',
                'updated_at' => '2023-08-04 10:14:57',
            ),
            54 => 
            array (
                'id' => 65,
                'key' => 'delete_motoristas',
                'table_name' => 'motoristas',
                'created_at' => '2023-08-04 10:14:57',
                'updated_at' => '2023-08-04 10:14:57',
            ),
            55 => 
            array (
                'id' => 66,
                'key' => 'browse_solicitacaos',
                'table_name' => 'solicitacaos',
                'created_at' => '2023-08-04 10:15:55',
                'updated_at' => '2023-08-04 10:15:55',
            ),
            56 => 
            array (
                'id' => 67,
                'key' => 'read_solicitacaos',
                'table_name' => 'solicitacaos',
                'created_at' => '2023-08-04 10:15:55',
                'updated_at' => '2023-08-04 10:15:55',
            ),
            57 => 
            array (
                'id' => 68,
                'key' => 'edit_solicitacaos',
                'table_name' => 'solicitacaos',
                'created_at' => '2023-08-04 10:15:55',
                'updated_at' => '2023-08-04 10:15:55',
            ),
            58 => 
            array (
                'id' => 69,
                'key' => 'add_solicitacaos',
                'table_name' => 'solicitacaos',
                'created_at' => '2023-08-04 10:15:55',
                'updated_at' => '2023-08-04 10:15:55',
            ),
            59 => 
            array (
                'id' => 70,
                'key' => 'delete_solicitacaos',
                'table_name' => 'solicitacaos',
                'created_at' => '2023-08-04 10:15:55',
                'updated_at' => '2023-08-04 10:15:55',
            ),
            60 => 
            array (
                'id' => 76,
                'key' => 'browse_veiculos',
                'table_name' => 'veiculos',
                'created_at' => '2023-08-04 10:20:18',
                'updated_at' => '2023-08-04 10:20:18',
            ),
            61 => 
            array (
                'id' => 77,
                'key' => 'read_veiculos',
                'table_name' => 'veiculos',
                'created_at' => '2023-08-04 10:20:18',
                'updated_at' => '2023-08-04 10:20:18',
            ),
            62 => 
            array (
                'id' => 78,
                'key' => 'edit_veiculos',
                'table_name' => 'veiculos',
                'created_at' => '2023-08-04 10:20:18',
                'updated_at' => '2023-08-04 10:20:18',
            ),
            63 => 
            array (
                'id' => 79,
                'key' => 'add_veiculos',
                'table_name' => 'veiculos',
                'created_at' => '2023-08-04 10:20:18',
                'updated_at' => '2023-08-04 10:20:18',
            ),
            64 => 
            array (
                'id' => 80,
                'key' => 'delete_veiculos',
                'table_name' => 'veiculos',
                'created_at' => '2023-08-04 10:20:18',
                'updated_at' => '2023-08-04 10:20:18',
            ),
            65 => 
            array (
                'id' => 81,
                'key' => 'browse_viagems',
                'table_name' => 'viagems',
                'created_at' => '2023-08-04 10:22:37',
                'updated_at' => '2023-08-04 10:22:37',
            ),
            66 => 
            array (
                'id' => 82,
                'key' => 'read_viagems',
                'table_name' => 'viagems',
                'created_at' => '2023-08-04 10:22:37',
                'updated_at' => '2023-08-04 10:22:37',
            ),
            67 => 
            array (
                'id' => 83,
                'key' => 'edit_viagems',
                'table_name' => 'viagems',
                'created_at' => '2023-08-04 10:22:37',
                'updated_at' => '2023-08-04 10:22:37',
            ),
            68 => 
            array (
                'id' => 84,
                'key' => 'add_viagems',
                'table_name' => 'viagems',
                'created_at' => '2023-08-04 10:22:37',
                'updated_at' => '2023-08-04 10:22:37',
            ),
            69 => 
            array (
                'id' => 85,
                'key' => 'delete_viagems',
                'table_name' => 'viagems',
                'created_at' => '2023-08-04 10:22:37',
                'updated_at' => '2023-08-04 10:22:37',
            ),
            70 => 
            array (
                'id' => 86,
                'key' => 'browse_multas',
                'table_name' => 'multas',
                'created_at' => '2023-08-04 10:35:18',
                'updated_at' => '2023-08-04 10:35:18',
            ),
            71 => 
            array (
                'id' => 87,
                'key' => 'read_multas',
                'table_name' => 'multas',
                'created_at' => '2023-08-04 10:35:18',
                'updated_at' => '2023-08-04 10:35:18',
            ),
            72 => 
            array (
                'id' => 88,
                'key' => 'edit_multas',
                'table_name' => 'multas',
                'created_at' => '2023-08-04 10:35:18',
                'updated_at' => '2023-08-04 10:35:18',
            ),
            73 => 
            array (
                'id' => 89,
                'key' => 'add_multas',
                'table_name' => 'multas',
                'created_at' => '2023-08-04 10:35:18',
                'updated_at' => '2023-08-04 10:35:18',
            ),
            74 => 
            array (
                'id' => 90,
                'key' => 'delete_multas',
                'table_name' => 'multas',
                'created_at' => '2023-08-04 10:35:18',
                'updated_at' => '2023-08-04 10:35:18',
            ),
        ));
        
        
    }
}