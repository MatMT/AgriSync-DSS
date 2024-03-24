<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles ===================================
        $roleGG = Role::create(['name' => 'Gerente General']);
        $roleGS = Role::create(['name' => 'Gerente Sucursal']);
        $roleCJ = Role::create(['name' => 'Cajero']);

        // Permisos ================================
        // Administración Gerente General
        Permission::create(['name' => 'admin.gg.index'])->syncRoles([$roleGG]); // Asignar 1 Permiso a 1 Role
        Permission::create(['name' => 'admin.gg.store'])->syncRoles([$roleGG]);

        // Administración Gerente Sucursal
        Permission::create(['name' => 'admin.gs.index'])->syncRoles([$roleGS]);

        // Administración Panel Cajero
        Permission::create(['name' => 'admin.cj.index'])->syncRoles([$roleCJ]);
    }

}
