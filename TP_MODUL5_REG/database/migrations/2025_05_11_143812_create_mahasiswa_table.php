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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            
            // TODO: Buat kolom nama(string), nim(string & unique), jurusan(string), fakultas(string) & foto_profil(string)
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('jurusan');
            $table->string('fakultas');
            $table->string('foto_profil');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
