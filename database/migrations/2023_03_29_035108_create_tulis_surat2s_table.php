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
        Schema::create('tulis_surat2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nama_surat");
            $table->string("tahun_surat");
            $table->string("tempatLahir");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tulis_surat2s');
    }
};
