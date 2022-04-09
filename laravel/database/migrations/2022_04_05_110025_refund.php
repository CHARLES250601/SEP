<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Refund extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund', function (Blueprint $table) {
            $table->id();
            $table->dateTime('refund_tanggal');
            $table->integer('user_id');
            $table->string('user_username');
            $table->integer('invoice_id');
            $table->string('boardgame_nama');
            $table->integer('boardgame_harga_beli');
            $table->integer('refund_jumlah');
            $table->integer('refund_subtotal');
            $table->integer('refund_grandtotal');
            $table->string('refund_alasan');
            $table->enum('refund_status', ['proces','done'])->default('proces');
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
        Schema::dropIfExists('refund');
    }
}
