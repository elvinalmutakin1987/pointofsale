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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->integer('satuan_id')->nullable();
            $table->integer('barang_id')->nullable();
            $table->integer('grupbarang_id')->nullable();
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->string('slug')->nullable();
            $table->string('nama')->nullable();
            $table->string('max_stok')->nullable();
            $table->string('min_stok')->nullable();
            $table->decimal('harga_beli', 16, 2)->nullable();
            $table->decimal('harga_jual', 16, 2)->nullable();
            $table->string('stok')->nullable();
            $table->string('is_jual')->nullable();
            $table->string('is_stok')->nullable();
            $table->string('is_bom')->nullable();
            $table->string('is_aset')->nullable();
            $table->string('is_pajak')->nullable();
            $table->string('status')->nullable();
            $table->integer('bom_satuan_id')->nullable();
            $table->string('bom_kategori')->nullable();
            $table->string('bom_deskripsi')->nullable();
            $table->decimal('bom_jumlah', 16, 2)->nullable();
            $table->decimal('bom_biaya', 16, 2)->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('satuan_id');
            $table->index('barang_id');
            $table->index('grupbarang_id');
            $table->index('bom_satuan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
