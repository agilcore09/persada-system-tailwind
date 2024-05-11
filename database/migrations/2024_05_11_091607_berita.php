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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul_berita', 100);
            $table->string('cover', 100)->nullable();
            $table->date('tanggal');
            $table->unsignedBigInteger('author');
            $table->unsignedBigInteger('kategori');
            $table->text('body_berita');

            // 
            $table->foreign('kategori')->references('id')->on('other_kategori');
            $table->foreign('author')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
};
