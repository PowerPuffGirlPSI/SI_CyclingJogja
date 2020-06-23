<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
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
            $table->integer('id_user')->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_event')->foreign('id_event')->references('id')->on('events')->onDelete('cascade');
            $table->string('status_pemesanan');
            $table->date('tgl_pemesanan');
            $table->integer('jumlah_barang_pesan');
            $table->integer('nomor_transaksi_pemesanan');

            $table->string('token');

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
        Schema::dropIfExists('pendaftars');
    }
}
