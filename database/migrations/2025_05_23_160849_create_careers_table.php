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
           Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('slug')->unique();
            $table->enum('type', ['Full Time', 'Part Time', 'Both'])->default('Both');
            $table->text('description');
            $table->text('skills')->nullable(); // JSON format
            $table->text('qualifications')->nullable(); // JSON format
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
