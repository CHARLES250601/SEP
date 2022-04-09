<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->dateTime('invoice_tanggal');
            $table->integer('user_id');
            $table->string ('user_username');
            $table->string('user_alamat');
            $table->integer('boardgame_id');
            $table->string('boargame_nama');
            $table->integer('boargame_harga_jual');
            $table->integer('jumlah_boardgame');
            $table->integer('subtotal');
            $table->integer('grandtotal');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
