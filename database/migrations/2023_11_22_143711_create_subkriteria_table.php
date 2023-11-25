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
        Schema::create('subkriteria', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->foreign('kode')->references('kode')->on('datakriteria');
            $table->string('nama')->unique();
            $table->integer('nilai'); // menggunakan decimal untuk nilai dengan 2 digit di belakang koma
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subkriteria');
    }
};
