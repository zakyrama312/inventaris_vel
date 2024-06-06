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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->nullable();
            $table->string('nama_barang')->nullable();
            $table->string('merk')->nullable();
            $table->integer('harga_beli')->nullable();
            $table->text('spesifikasi')->nullable();
            $table->string('bahan')->nullable();
            $table->integer('stok')->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignId('id_users')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_lab')->constrained('labs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_keadaan')->constrained('keadaans')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
