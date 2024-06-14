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
        Schema::create('mutasis', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            // Pengirim
            $table->string('divisi_pengirim');
            $table->string('penanggung_jawab');
            $table->string('dibuat_oleh');
            // Tujuan
            $table->string('lokasi');
            $table->string('divisi_tujuan');
            // Add Data mutasi
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('model');
            $table->string('kategori');
            $table->string('no_inventaris');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutasis');
    }
};
