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
            $table->id('id_peminjaman');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_buku');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->foreign('id_user')->references('id_user')->on('users');
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
