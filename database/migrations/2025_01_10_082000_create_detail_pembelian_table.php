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
        Schema::create('detail_pembelian', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_pembelian")->constrained()->references("id")->on("pembelian")->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("product_id")->constrained()->references("id")->on("products")->onUpdate("cascade")->onDelete("cascade");
            $table->string("kuantitas", 5)->nullable();
            $table->string("harga_barang", 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pembelian');
    }
};
