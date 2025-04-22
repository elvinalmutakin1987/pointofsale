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
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->integer('lokasi_id')->nullable();
            $table->integer('barang_id')->nullable();
            $table->integer('transaksi_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('nomor')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('transaksi')->nullable();
            $table->decimal('stok_awal', 16, 2)->nullable();
            $table->decimal('masuk', 16, 2)->nullable();
            $table->decimal('keluar', 16, 2)->nullable();
            $table->decimal('stok_akhir', 16, 2)->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('barang_id');
            $table->index('lokasi_id');
            $table->index('transaksi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stoks');
    }
};
