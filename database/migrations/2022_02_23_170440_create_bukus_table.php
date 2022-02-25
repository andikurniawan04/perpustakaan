<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id('id_buku')->autoIncrement();
            $table->unsignedBigInteger('id_kategori');
            // $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->string('judul_buku', 100);
            $table->string('pengarang', 100);
            $table->string('penerbit', 100);
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
        Schema::dropIfExists('bukus');
    }
}
