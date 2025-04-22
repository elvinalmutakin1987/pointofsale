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
        Schema::create('returs', function (Blueprint $table) {
            $table->id();
            $table->integer('transaksi_id')->nullable();
            $table->integer('lokasi_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('nomor')->nullable();
            $table->string('dokumen')->nullable();
            $table->date('tanggal')->nullable();
            $table->decimal('grand_total', 16, 2)->nullable();
            $table->string('status')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('transaksi_id');
            $table->index('lokasi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returs');
    }
};
