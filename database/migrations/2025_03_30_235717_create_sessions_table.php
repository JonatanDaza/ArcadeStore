<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Use string for session ID
            $table->foreignId('user_id')->nullable()->index(); // Add user_id for logged-in users
            $table->string('ip_address', 45)->nullable(); // Add ip_address
            $table->text('user_agent')->nullable(); // Add user_agent
            $table->longText('payload'); // Use longText for session data
            $table->integer('last_activity')->index(); // Add last_activity
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
