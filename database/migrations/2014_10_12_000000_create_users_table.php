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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('last_names');
            $table->string('email')->unique();
            $table->string('password');

            // Información extra =============================
            $table->char('DUI', 10)->unique()->nullable();
            $table->enum('gender', ['M', 'F'])->default(null);
            // $table->foreignId('branch_id')->nullable()->constrained()->nullOnDelete();
            $table->string('profile_pic', 41)->default("default-pfp.png");
            $table->unsignedBigInteger('status_id')->nullable()
                ->nullOnDelete();

            // Validación de Correo ==========================
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Llaves foraneas ==========================P
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
