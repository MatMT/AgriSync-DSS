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
        $rolePS = Role::create(['name' => 'Prestamista']);
        $roleCL = Role::create(['name' => 'Cliente']);
        $roleDP = Role::create(['name' => 'Dependiente']);

        // Permisos ================================
        // Administración Gerente General
        Permission::create(['name' => 'admin.gg.index'])->syncRoles([$roleGG]); // Asignar 1 Permiso a 1 Role
        Permission::create(['name' => 'admin.gg.store'])->syncRoles([$roleGG]);

        // Administración Gerente Sucursal
        Permission::create(['name' => 'admin.gs.index'])->syncRoles([$roleGS]);

        // Administración Panel Cajero
        Permission::create(['name' => 'admin.cj.index'])->syncRoles([$roleCJ]);

        // Usabilidad Panel Prestamista
        Permission::create(['name' => 'user.ps.index'])->syncRoles([$rolePS]);

        // Usabilidad Panel Cliente
        Permission::create(['name' => 'user.cl.index'])->syncRoles([$roleCL]);

        // Usabilidad Panel Dependiente
        Permission::create(['name' => 'user.dp.index'])->syncRoles([$roleDP]);
    }

}
