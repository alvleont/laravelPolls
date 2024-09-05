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
        Schema::create('sustentations', function (Blueprint $table) {
            $table->id();
            $table->string('DocumentId');
            $table->boolean('autoriaRecurso')->nullable();
            $table->string('autorizacionPublicacion')->nullable();
            $table->json('categoryIds')->nullable();
            $table->string('experienceId')->nullable();
            $table->string('fundamentacion')->nullable();
            $table->string('impacto')->nullable();
            $table->boolean('isSubmitted')->nullable();
            $table->string('professorEmail')->nullable();
            $table->string('sostenibilidad')->nullable();
            $table->string('timestamp')->nullable();
            $table->string('title')->nullable();
            $table->string('videoImageUrl')->nullable();
            $table->string('youtubeVideoUrl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sustentations');
    }
};
