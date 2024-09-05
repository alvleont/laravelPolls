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
        Schema::table('users', function (Blueprint $table) {
            $table->string('DocumentID');
            $table->string('campus');
            $table->string('genre');
            $table->string('idInstitucional');
            $table->string('numcelular');
            $table->string('numeroDocumento');
            $table->string('program');
            $table->string('role');
            $table->string('tipoDocumento');
            $table->string('uid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
