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
        Schema::create('employee_request', function (Blueprint $table) {
            $table->id();

            // Llaves foraneas ==========================

            $table->foreignId('status_id')->nullable()
                ->foreignId('status_transactions')
                ->nullOnDelete();

            $table->foreignId('manager_id')->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('employee_id')->nullable()
                ->constained('users')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_request');
    }
};
