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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('status');
            $table->string('background');
            $table->string('kiri_atas');
            $table->string('kanan_atas');
            $table->string('tengah_atas');
            $table->string('kiri_bawah');
            $table->string('kanan_bawah');
            $table->string('tengah_bawah');
            $table->string('cover_border');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
