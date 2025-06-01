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
        Schema::create('motorolas', function (Blueprint $table) {
             $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('model_number')->nullable();
            $table->enum('category', ['VHF', 'UHF', 'Accessories', 'Repeater']);
            $table->enum('type', ['Radio Mobil', 'Radio Portable', 'Broadband']);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->json('specifications')->nullable();
            $table->decimal('price', 12, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorolas');
    }
};
