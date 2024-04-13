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
            // $table->integer('users', false, true)->default(0);

            $table->unsignedBigInteger('local_manager_id')->nullable();

            $table->timestamps();

            // Llaves foraneas ==========================
            $table->foreign('local_manager_id')->references('id')->on('users')->nullOnDelete();
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
