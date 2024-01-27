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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('dosen_pa')->nullable();
            $table->string('nama')->nullable();
            $table->string('nim')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('sks')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('fakultas')->nullable();
            $table->date('tanggal_ta')->nullable();
            $table->string('surah')->nullable();
            $table->string('ipk')->nullable();
            $table->string('hp')->nullable();
            $table->string('statusTA')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
