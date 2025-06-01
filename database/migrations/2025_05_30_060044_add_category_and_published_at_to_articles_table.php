<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('category')->default('csr')->after('link');
            $table->timestamp('published_at')->nullable()->after('category');
            $table->longText('content')->nullable()->after('description'); // untuk konten lengkap dengan format HTML
        });
    }

    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['category', 'published_at', 'content']);
        });
    }
};