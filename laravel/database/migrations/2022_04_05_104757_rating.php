<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('boardgame_id');
            $table->integer('invoice_id');
            $table->string('boardgame_nama');
            $table->integer('boargame_harga_beli');
            $table->integer('boargame_harga_jual');
            $table->integer('boargame_stok');
            $table->text('boardgame_gambar');
            $table->string('boardgame_genre');
            $table->text('boardgame_deskripsi');
            $table->rememberToken();
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
        Schema::dropIfExists('rating');
    }
}
