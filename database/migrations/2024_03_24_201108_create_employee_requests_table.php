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
        Schema::create('employee_requests', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('status_id')->nullable()
                ->nullOnDelete();

            $table->unsignedBigInteger('manager_id')->nullable()
                ->nullOnDelete();

            $table->unsignedBigInteger('employee_id')->nullable()
                ->nullOnDelete();

            $table->timestamps();

            // Llaves foraneas ==========================
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('manager_id')->references('id')->on('users');
            $table->foreign('employee_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_requests');
    }
};
