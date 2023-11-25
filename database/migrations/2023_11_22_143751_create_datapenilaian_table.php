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
        Schema::create('datapenilaian', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alternatif');
            $table->foreign('nama_alternatif')->references('nama_alternatif')->on('dataalternatif');
            $table->string('kode');
            $table->foreign('kode')->references('kode')->on('subkriteria');
            $table->integer('nilai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapenilaian');
    }
};
