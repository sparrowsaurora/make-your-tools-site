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
        Schema::create('kits', function (Blueprint $table) {
            $table->id();

            // Core
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();

            // Pricing (AUD)
            $table->integer('price_cents');

            // Inventory
            $table->integer('stock')->default(0);
            $table->boolean('is_active')->default(false);
            $table->boolean('is_deprecated')->default(false);

            // Metadata
            $table->string('sku')->nullable()->unique();
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kits');
    }
};
