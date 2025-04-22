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
        Schema::create('postransaksidetails', function (Blueprint $table) {
            $table->id();
            $table->integer('postransaksi_id')->nullable();
            $table->integer('barang_id')->nullable();
            $table->integer('satuan_id')->nullable();
            $table->integer('lokasi_id')->nullable();
            $table->string('slug')->nullable();
            $table->decimal('jumlah', 16, 2)->nullable();
            $table->decimal('harga', 16, 2)->nullable();
            $table->decimal('pajak', 16, 2)->nullable();
            $table->decimal('harga_sebelum_pajak', 16, 2)->nullable();
            $table->decimal('diskon', 16, 2)->nullable();
            $table->decimal('subtotal', 16, 2)->nullable();
            $table->string('status_upload')->nullable();
            $table->string('status_download')->nullable();
            $table->string('status_sinkron')->nullable();
            $table->timestamps();
            $table->index('postransaksi_id');
            $table->index('barang_id');
            $table->index('satuan_id');
            $table->index('lokasi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postransaksidetails');
    }
};
