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
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('slug')->nullable();
            $table->string('tipe')->nullable();
            $table->string('alamat')->nullable();
            $table->string('alamat_penagihan')->nullable();
            $table->string('alamat_pengiriman')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nama_cp')->nullable();
            $table->string('no_hp_cp')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};
