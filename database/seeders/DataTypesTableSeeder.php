<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-04 09:39:02',
                'updated_at' => '2023-08-31 16:23:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-08-04 09:39:03',
                'updated_at' => '2023-08-04 09:39:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-08-04 09:39:03',
                'updated_at' => '2023-08-04 09:39:03',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-08-04 09:39:13',
                'updated_at' => '2023-08-04 09:39:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-08-04 09:39:16',
                'updated_at' => '2023-08-04 09:39:16',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-08-04 09:39:18',
                'updated_at' => '2023-08-04 09:39:18',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'rotas',
                'slug' => 'rotas',
                'display_name_singular' => 'Rota',
                'display_name_plural' => 'Rotas',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Rota',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-04 09:43:51',
                'updated_at' => '2023-09-06 17:28:38',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'estudantes',
                'slug' => 'estudantes',
                'display_name_singular' => 'Estudante',
                'display_name_plural' => 'Estudantes',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Estudante',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\VoyagerEstudanteController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-04 10:13:50',
                'updated_at' => '2023-09-01 20:49:10',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'motoristas',
                'slug' => 'motoristas',
                'display_name_singular' => 'Motorista',
                'display_name_plural' => 'Motoristas',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Motorista',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-04 10:14:56',
                'updated_at' => '2023-09-11 06:28:58',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'solicitacaos',
                'slug' => 'solicitacaos',
                'display_name_singular' => 'Solicitacao',
                'display_name_plural' => 'Solicitacaos',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Solicitacao',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\VoyagerSolicitacaController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-04 10:15:55',
                'updated_at' => '2023-09-01 21:50:18',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'veiculos',
                'slug' => 'veiculos',
                'display_name_singular' => 'Veiculo',
                'display_name_plural' => 'Veiculos',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Veiculo',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-04 10:20:18',
                'updated_at' => '2023-09-01 21:42:40',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'viagems',
                'slug' => 'viagems',
                'display_name_singular' => 'Viagem',
                'display_name_plural' => 'Viagems',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Viagem',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\VoyagerViagemController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-04 10:22:37',
                'updated_at' => '2023-09-01 10:17:19',
            ),
        ));
        
        
    }
}