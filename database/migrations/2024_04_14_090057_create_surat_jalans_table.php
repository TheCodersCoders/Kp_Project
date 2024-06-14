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
        Schema::create('surat_jalans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->integer('nomorSurat');
            $table->date('tglKirim')->nullable();
            $table->string('namaBarang');
            $table->integer('jumlahBarang');
            $table->string('tujuanTempat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_jalans');
    }
};
