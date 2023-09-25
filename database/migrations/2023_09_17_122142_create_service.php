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
        Schema::create('service', function (Blueprint $table) {
            $table->id('ID_SERVICE');
            $table->timestamps('DURASI');
            $table->string('NAMA_SERVICE');
            $table->string('DESKRIPSI');
            $table->string('KATEGORI_LAYANAN');
            $table->string('KATEGORI_HEWAN');
            $table->boolean('PICK_UP');
            $table->float('HARGA');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};


