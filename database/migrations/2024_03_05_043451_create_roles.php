<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // $role1 = Role::create(['name' => 'administrativo']);
        // $role2 = Role::create(['name' => 'cliente']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
