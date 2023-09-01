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
        $this->call(SolicitacaosTableSeeder::class);
        $this->call(VeiculosTableSeeder::class);
        $this->call(ViagemsTableSeeder::class);
        $this->call(EstudantesTableSeeder::class);
        $this->call(EstudanteViagemTableSeeder::class);
        $this->call(MotoristaVeiculoTableSeeder::class);
        $this->call(NotificacaosTableSeeder::class);
        $this->call(EstudanteUserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
