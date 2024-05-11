<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kode_alat')->unique();
            $table->date('tanggal_masuk');
            $table->string('sumber');
            $table->unsignedBigInteger('kategori');
            $table->string('lokasi');
            $table->string('status');
            $table->string('gambar');
            $table->foreign('kategori')->references('id')->on('other_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
};
