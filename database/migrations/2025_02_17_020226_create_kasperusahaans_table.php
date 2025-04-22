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
        Schema::create('kasperusahaans', function (Blueprint $table) {
            $table->id();
            $table->integer('bank_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('tipe')->nullable();
            $table->string('no_kartu')->nullable();
            $table->string('no_rekening')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('bank_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasperusahaans');
    }
};
