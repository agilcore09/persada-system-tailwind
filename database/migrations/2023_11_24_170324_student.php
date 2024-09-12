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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->string('nama_siswa');
            $table->integer('nis')->unique();
            $table->integer('nisn')->unique();
            $table->enum('kelas', ["VII A", "VII B", "VIII A", "VIII B", "IX A", "IX B", "X", "XI", "XII"]);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category')->constrained();
            $table->foreign('type_id')->references('id')->on('type')->constrained();
            $table->foreign('users_id')->references('id')->on('users')->constrained()->nullable();
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
        Schema::dropIfExists('siswa');
    }
};
