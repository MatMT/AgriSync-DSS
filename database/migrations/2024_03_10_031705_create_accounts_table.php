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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();

            // Relación | Pertenece a cliente
            $table->foreignId('client_id')->nullable()->constrained('users')->nullOnDelete();
            $table->decimal('balance', 10, 2, true);
            $table->enum('status', ['activa', 'suspendida']);
            $table->dateTime('open_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
