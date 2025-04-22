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
        Schema::create('konversisatuans', function (Blueprint $table) {
            $table->id();
            $table->integer('barang_id')->nullable();
            $table->integer('satuan_id')->nullable();
            $table->decimal('faktor', 16, 2)->nullable();
            $table->string('is_default')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('barang_id');
            $table->index('satuan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konversisatuans');
    }
};
