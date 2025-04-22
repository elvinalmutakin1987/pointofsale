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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('transaksi_id')->nullable();
            $table->integer('kontak_id')->nullable();
            $table->integer('bank_id')->nullable();
            $table->integer('bank_tujuan_id')->nullable();
            $table->integer('kasperusahaan_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('nomor')->nullable();
            $table->string('dokumen')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('jenis_transaksi')->nullable();
            $table->string('jenis_pembayaran')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->string('rekening_asal')->nullable();
            $table->string('rekening_tujuan')->nullable();
            $table->string('no_kartu')->nullable();
            $table->string('no_transaksi')->nullable();
            $table->string('no_referensi')->nullable();
            $table->decimal('total_pembayaran', 16, 2)->nullable();
            $table->decimal('total_tagihan', 16, 2)->nullable();
            $table->decimal('telah_dibayar', 16, 2)->nullable();
            $table->decimal('dibayar', 16, 2)->nullable();
            $table->decimal('sisa_tagihan', 16, 2)->nullable();
            $table->text('catatan')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('transaksi_id');
            $table->index('kontak_id');
            $table->index('bank_id');
            $table->index('bank_tujuan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
