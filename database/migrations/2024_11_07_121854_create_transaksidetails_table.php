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
        Schema::create('transaksidetails', function (Blueprint $table) {
            $table->id();
            $table->integer('transaksi_id')->nullable();
            $table->integer('transaksidetail_id')->nullable();
            $table->integer('barang_id')->nullable();
            $table->integer('satuan_id')->nullable();
            $table->decimal('jumlah', 16, 2)->nullable();
            $table->decimal('harga', 16, 2)->nullable();
            $table->decimal('subtotal', 16, 2)->nullable();
            $table->decimal('jumlah_dikirim', 16, 2)->nullable();
            $table->decimal('jumlah_diterima', 16, 2)->nullable();
            $table->decimal('jumlah_rusak', 16, 2)->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('transaksi_id');
            $table->index('transaksidetail_id');
            $table->index('barang_id');
            $table->index('satuan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksidetails');
    }
};
