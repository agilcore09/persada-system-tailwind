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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            // $table->integer('nomor_nota')->nullable();
            $table->integer('pembangunan')->nullable();
            $table->string('keterangan_pembangunan')->nullable();

            $table->integer('spp')->nullable();
            $table->string('keterangan_spp')->nullable();
            $table->integer('lab')->nullable();
            $table->string('keterangan_lab')->nullable();
            $table->integer('osis')->nullable();
            $table->string('keterangan_osis')->nullable();
            $table->integer('semester')->nullable();
            $table->string('keterangan_semester')->nullable();
            $table->integer('psg')->nullable();
            $table->string('keterangan_psg')->nullable();
            $table->integer('ukk')->nullable();
            $table->string('keterangan_ukk')->nullable();
            $table->date('tanggal_bayar')->nullable();
            $table->date('tanggal_update')->nullable();
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};
