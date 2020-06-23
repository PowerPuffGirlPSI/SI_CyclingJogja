<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_event')->unsigned();
            $table->string('status_pemesanan');
            $table->date('tgl_pemesanan');
            $table->integer('jumlah_barang_pesan');
            $table->integer('nomor_transaksi_pemesanan');
            $table->string('token');

            $table->timestamps();

            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('id_event')
            ->references('id')
            ->on('events')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftars');
    }
}
