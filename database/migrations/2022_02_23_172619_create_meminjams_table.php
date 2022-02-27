<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeminjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meminjams', function (Blueprint $table) {
            $table->id('id_peminjaman')->autoIncrement();
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->integer('jumlah');
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_petugas');
            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
            $table->foreign('id_buku')->references('id_buku')->on('bukus');
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
        Schema::dropIfExists('meminjams');
    }
}