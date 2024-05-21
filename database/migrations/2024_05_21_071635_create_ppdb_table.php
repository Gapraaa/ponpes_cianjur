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
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('ttg_siswa');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->integer('nisn')->unique();
            $table->string('alamat_siswa');
            $table->integer('anak');
            $table->integer('saudara');
            $table->integer('tlpn_siswa');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_ortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->integer('tlpn_ayah');
            $table->integer('tlpn_ibu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb');
    }
};
