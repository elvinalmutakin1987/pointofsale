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
        Schema::create('posusers', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_id')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('hak_akses')->nullable();
            $table->string('status_upload')->nullable();
            $table->string('status_download')->nullable();
            $table->string('status_sinkron')->nullable();
            $table->timestamps();
            $table->index('lokasi_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posusers');
    }
};
