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
        Schema::create('returdetails', function (Blueprint $table) {
            $table->id();
            $table->integer('retur_id')->nullable();
            $table->integer('barang_id')->nullable();
            $table->integer('satuan_id')->nullable();
            $table->decimal('jumlah', 16, 2)->nullable();
            $table->decimal('diterima', 16, 2)->nullable();
            $table->decimal('harga', 16, 2)->nullable();
            $table->decimal('diskon', 16, 2)->nullable();
            $table->decimal('subtotal', 16, 2)->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('retur_id');
            $table->index('barang_id');
            $table->index('satuan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returdetails');
    }
};
