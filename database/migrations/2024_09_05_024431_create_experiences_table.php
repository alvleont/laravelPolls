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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('DocumentId');
            $table->boolean('approved')->nullable();
            $table->string('assignedCategoryId')->nullable();
            $table->json('categoryIds')->nullable();
            $table->string('description')->nullable();
            $table->json('professorIds')->nullable();
            $table->string('title')->nullable();
            $table->string('videoImageUrl')->nullable();
            $table->string('youtubeVideoUrl')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
