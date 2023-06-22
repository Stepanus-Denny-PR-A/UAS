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
        Schema::create('Data-Filem', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->string('Gambar');
            $table->string('Tahun_Terbit');
            $table->text('Deskripsi');
            $table->string('Biaya_Pembuatan');
            $table->string('Pendapatan');
            $table->string('Trailer');
            $table->string('Sutradara');
            $table->string('Pemeran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Data-Filem');
    }
};
