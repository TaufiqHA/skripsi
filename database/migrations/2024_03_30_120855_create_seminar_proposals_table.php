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
        Schema::create('seminar_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->date('tanggal');
            $table->string('tempat');
            $table->string('dosen_penguji1');
            $table->string('dosen_penguji2');
            $table->string('sk_penguji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminar_proposals');
    }
};
