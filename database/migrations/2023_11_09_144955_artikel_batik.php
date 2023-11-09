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
        Schema::create('artikel_batik', function (Blueprint $table) {
            $table->id();
            $table->string('judul',255);
            $table->binary('foto')->nullable();
            $table->text('opening')->nullable();
            $table->text('asal_usul')->nullable();
            $table->text('filosofi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
