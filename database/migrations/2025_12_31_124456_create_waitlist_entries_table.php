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
        Schema::create('waitlist_entries', function (Blueprint $table) {
            $table->id();

            // Core
            $table->string('first_name');
            $table->string('email')->unique();

            // Tracking
            $table->string('ip_address', 45)->nullable(); // IPv6 safe
            $table->string('user_agent')->nullable();
            $table->string('source')->nullable(); // utm / page / campaign
            $table->timestamp('invited_at')->nullable();

            // extra
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waitlist_entries');
    }
};
