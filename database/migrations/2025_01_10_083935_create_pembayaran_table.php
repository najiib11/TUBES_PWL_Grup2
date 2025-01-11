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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_pembelian")->references("id")->on("pembelian")->onUpdate("cascade")->onDelete("cascade");
            $table->date("tgl_pembayaran")->nullable();
            $table->string("total_pembayaran", 10)->nullable();
            $table->string("metode_pembayaran", 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
