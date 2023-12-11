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
            $table->string('title', 255);
            $table->bigInteger('authors_id')->index();
            $table->bigInteger('categories_id')->index();
            $table->string('ISBN', 20);
            $table->string('genre', 50);
            $table->string('publisher', 100);
            $table->string('language', 50);
            $table->integer('total_pages');
            $table->integer('available_copies');
            $table->timestamps();
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
