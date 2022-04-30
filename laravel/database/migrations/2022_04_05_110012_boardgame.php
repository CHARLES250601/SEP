<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Boardgame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boardgame', function (Blueprint $table) {
            $table->id();
            $table->string ('boardgame_nama');
            $table->integer('boardgame_harga_beli');
            $table->integer('boardgame_harga_jual');//ini ganti boardgame
            $table->integer('boardgame_stok');
            $table->text('boardgame_gambar');
            $table->string('boardgame_genre');
            $table->text('boardgame_deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boardgame');
    }
}
