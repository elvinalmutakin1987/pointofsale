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
        Schema::create('pembayarandetails', function (Blueprint $table) {
            $table->id();
            $table->integer('pembayaran_id')->nullable();
            $table->integer('transaksi_id')->nullable();
            $table->string('slug')->nullable();
            $table->decimal('total_tagihan', 16, 2)->nullable();
            $table->decimal('telah_dibayar', 16, 2)->nullable();
            $table->decimal('dibayar', 16, 2)->nullable();
            $table->decimal('sisa_tagihan', 16, 2)->nullable();
            $table->timestamps();
            $table->index('transaksi_id');
            $table->index('pembayaran_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarandetails');
    }
};
