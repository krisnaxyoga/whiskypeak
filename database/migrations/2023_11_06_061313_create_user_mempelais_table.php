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
        Schema::create('user_mempelais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('theme_id');
            $table->string('foto_pria');
            $table->string('nama_pria');
            $table->string('nama_panggilan_pria');
            $table->string('nama_ibu_pria');
            $table->string('nama_ayah_pria');
            $table->string('foto_wanita');
            $table->string('nama_wanita');
            $table->string('nama_panggilan_wanita');
            $table->string('nama_ibu_wanita');
            $table->string('nama_ayah_wanita');
            $table->string('foto_couple');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mempelais');
    }
};
