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
        Schema::create('obat_pasiens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kunjungan')->unsigned();
            $table->string('nama_obat');
            $table->foreign('id_kunjungan')->references('id')->on('kunjungans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat_pasiens');
    }
};
