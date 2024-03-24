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

        // Permisos ================================
        // Administración Gerente General
        Permission::create(['name' => 'admin.gg.index'])->syncRoles([$roleGG]); // Asignar 1 Permiso a 1 Role
        Permission::create(['name' => 'admin.gg.store'])->syncRoles([$roleGG]);
    }

}
