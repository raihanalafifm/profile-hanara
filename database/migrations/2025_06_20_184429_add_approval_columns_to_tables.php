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
        // Add approval columns to articles table
        Schema::table('articles', function (Blueprint $table) {
            $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending')->after('is_active');
            $table->foreignId('approved_by')->nullable()->after('approval_status')->constrained('users')->onDelete('set null');
            $table->timestamp('approved_at')->nullable()->after('approved_by');
            $table->text('approval_notes')->nullable()->after('approved_at');
            $table->foreignId('created_by')->nullable()->after('user_id')->constrained('users')->onDelete('set null');
        });

        // Add approval columns to careers table
        Schema::table('careers', function (Blueprint $table) {
            $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending')->after('is_active');
            $table->foreignId('approved_by')->nullable()->after('approval_status')->constrained('users')->onDelete('set null');
            $table->timestamp('approved_at')->nullable()->after('approved_by');
            $table->text('approval_notes')->nullable()->after('approved_at');
            $table->foreignId('created_by')->nullable()->after('id')->constrained('users')->onDelete('set null');
        });

        // Add approval columns to motorolas table
        Schema::table('motorolas', function (Blueprint $table) {
            $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending')->after('is_active');
            $table->foreignId('approved_by')->nullable()->after('approval_status')->constrained('users')->onDelete('set null');
            $table->timestamp('approved_at')->nullable()->after('approved_by');
            $table->text('approval_notes')->nullable()->after('approved_at');
            $table->foreignId('created_by')->nullable()->after('id')->constrained('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['approved_by']);
            $table->dropForeign(['created_by']);
            $table->dropColumn(['approval_status', 'approved_by', 'approved_at', 'approval_notes', 'created_by']);
        });

        Schema::table('careers', function (Blueprint $table) {
            $table->dropForeign(['approved_by']);
            $table->dropForeign(['created_by']);
            $table->dropColumn(['approval_status', 'approved_by', 'approved_at', 'approval_notes', 'created_by']);
        });

        Schema::table('motorolas', function (Blueprint $table) {
            $table->dropForeign(['approved_by']);
            $table->dropForeign(['created_by']);
            $table->dropColumn(['approval_status', 'approved_by', 'approved_at', 'approval_notes', 'created_by']);
        });
    }
};
