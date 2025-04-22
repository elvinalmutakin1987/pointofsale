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
        Schema::create('postransaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('pospenjualan_id')->nullable();
            $table->integer('posuser_id')->nullable();
            $table->integer('lokasi_id')->nullable();
            $table->string('slug')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nomor_unik')->nullable();
            $table->string('nomor')->nullable();
            $table->decimal('total', 16, 2)->nullable();
            $table->decimal('diskon', 16, 2)->nullable();
            $table->decimal('pajak', 16, 2)->nullable();
            $table->decimal('grand_total', 16, 2)->nullable();
            $table->string('status')->nullable();
            $table->string('status_upload')->nullable();
            $table->string('status_download')->nullable();
            $table->string('status_sinkron')->nullable();
            $table->timestamps();
            $table->index('pospenjualan_id');
            $table->index('posuser_id');
            $table->index('lokasi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postransaksis');
    }
};
