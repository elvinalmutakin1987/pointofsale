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
        Schema::create('pospenjualans', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->integer('posuser_id')->nullable();
            $table->integer('lokasi_id')->nullable();
            $table->string('shift')->nullable();
            $table->date('tanggal')->nullable();
            $table->timestamp('waktu_buka')->nullable();
            $table->timestamp('waktu_tutup')->nullable();
            $table->string('nomor')->nullable();
            $table->decimal('modal', 16, 2)->nullable();
            $table->decimal('penjualan', 16, 2)->nullable();
            $table->decimal('setoran', 16, 2)->nullable();
            $table->string('status')->nullable();
            $table->string('status_upload')->nullable();
            $table->string('status_download')->nullable();
            $table->string('status_sinkron')->nullable();
            $table->timestamps();
            $table->index('posuser_id');
            $table->index('lokasi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pospenjualans');
    }
};
