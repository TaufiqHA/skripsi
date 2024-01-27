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
        Schema::create('juduls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->string('judul');
            $table->string('konsentrasi');
            $table->string('metode');
            $table->string('teknik');
            $table->string('bentuk_data');
            $table->string('tempat');
            $table->string('nama_dosen1');
            $table->string('nama_dosen2');
            $table->string('nama_dosen3');
            $table->string('nama_dosen4');
            $table->string('bukti');
            $table->string('status');
            $table->date('tanggal_pengajuan')->nullable();
            $table->date('tanggal_ditolak')->nullable();
            $table->string('alasan_penolakan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juduls');
    }
};
