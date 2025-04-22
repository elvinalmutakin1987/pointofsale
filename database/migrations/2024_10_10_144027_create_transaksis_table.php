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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('kontak_id')->nullable();
            $table->integer('transaksi_id')->nullable();
            $table->integer('lokasi_id')->nullable();
            $table->integer('tujuan_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('nomor')->nullable();
            $table->string('dokumen')->nullable();
            $table->string('jenis')->nullable();
            $table->string('referensi')->nullable();
            $table->string('ref_lain')->nullable();
            $table->date('tanggal')->nullable();
            $table->date('termin')->nullable();
            $table->decimal('total', 16, 2)->nullable();
            $table->decimal('diskon', 16, 2)->nullable();
            $table->decimal('pajak', 16, 2)->nullable();
            $table->decimal('grand_total', 16, 2)->nullable();
            $table->string('cara_bayar')->nullable();
            $table->decimal('terbayar', 16, 2)->nullable();
            $table->text('catatan')->nullable();
            $table->text('alamat_penagihan')->nullable();
            $table->text('alamat_pengiriman')->nullable();
            $table->string('sopir')->nullable();
            $table->string('nopol')->nullable();
            $table->string('status')->nullable();
            $table->string('posting')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('kontak_id');
            $table->index('transaksi_id');
            $table->index('lokasi_id');
            $table->index('tujuan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
