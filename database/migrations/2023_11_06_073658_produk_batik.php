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
        Schema::create('produk_batik', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('kategori')->nullable();
            $table->bigInteger('stok')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->string('kota')->nullable();
            $table->text('deskripsi')->nullable();
            $table->binary('foto')->nullable();
            $table->string('kontak_penjual')->nullable();
            $table->enum('status', ['pending', 'approve', 'not approve'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_batik');
    }
};
