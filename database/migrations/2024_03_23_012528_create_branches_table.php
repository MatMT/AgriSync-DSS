<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();

            $table->string('name', 35);
            $table->string('region', 30)->nullable();

            // Llaves foraneas ==========================

            $table->foreignId('local_manager_id')->nullable()
                ->foreignId('users_id')
                ->nullOnDelete();

            $table->foreignId('employee_map_id')->nullable()
                ->foreignId('employee_mapping')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
