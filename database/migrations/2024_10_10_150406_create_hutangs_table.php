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
        Schema::create('hutangs', function (Blueprint $table) {
            $table->id();
            $table->integer('kontak_id')->nullable();
            $table->integer('transaksi_id')->nullable();
            $table->string('nomor')->nullable();
            $table->date('tanggal')->nullable();
            $table->date('termin')->nullable();
            $table->string('tipe')->nullable();
            $table->decimal('total', 16, 2)->nullable();
            $table->decimal('dibayar', 16, 2)->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('kontak_id');
            $table->index('transaksi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hutangs');
    }
};
