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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(false);
            $table->string('description');
            $table->integer('page_count')->nullable(false);
            $table->string('author_name', 80)->nullable(false);
            $table->string('author_email', 50)->nullable(false);
            $table->date('published_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
