<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(RotasTableSeeder::class);
        $this->call(MotoristasTableSeeder::class);
        $this->call(MultasTableSeeder::class);
        $this->call(SolicitacaosTableSeeder::class);
        $this->call(VeiculosTableSeeder::class);
        $this->call(ViagemsTableSeeder::class);
        $this->call(EstudantesTableSeeder::class);
        $this->call(EncarregadosTableSeeder::class);
        $this->call(VeiculoMotoristasTableSeeder::class);
        $this->call(EstudanteViagemTableSeeder::class);
    }
}
