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
        Schema::create('employee_mapping', function (Blueprint $table) {
            $table->id();

            // Llaves foraneas ==========================

            $table->foreignId('branch_id')->nullable()
                ->foreignId('branches')
                ->nullOnDelete();

            $table->foreignId('employee_id')->nullable()
                ->foreignId('users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_mapping');
    }
};
