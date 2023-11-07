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
        Schema::table('themes', function (Blueprint $table) {

            $table->string('animation_cover')->after('cover_border')->nullable();
            $table->string('salam')->after('cover_border')->nullable();
            $table->string('penutup_salam')->after('cover_border')->nullable();
            $table->string('css_name')->after('cover_border')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('themes', function (Blueprint $table) {
            //
        });
    }
};
