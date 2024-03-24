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
        Schema::create('employee_mappings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('branch_id')->nullable()
                ->nullOnDelete();

            $table->unsignedBigInteger('employee_id')->nullable()
                ->nullOnDelete();

            $table->timestamps();

            // Llaves foraneas ==========================
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('employee_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_mappings');
    }
};
