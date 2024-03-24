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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->decimal('amount', 10, 2, true)->nullable(false);
            $table->string('description', 200)->nullable();

            // Llaves foraneas ==========================

            $table->foreignId('admin_id')->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('recipient_account_id')->nullable()
                ->constrained('accounts')
                ->nullOnDelete();

            $table->foreignId('sending_account_id')->nullable()
                ->constrained('accounts')
                ->nullOnDelete();

            $table->foreignId('type_transaction_id')->nullable()
                ->constrained('type_transactions')
                ->nullOnDelete();

            $table->foreignId('status_transaction_id')->nullable()
                ->constrained('statuses')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
