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
        Schema::create('user_admin', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username');
            $table->char('kontak',20);
            $table->string('jenis_kelamin')->nullable();
            $table->char('email',255)->nullable();
            $table->string('password')->nullable();
            $table->binary('fotoprofil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_admin');
    }
};
