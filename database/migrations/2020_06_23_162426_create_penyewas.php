<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kondisi');
            $table->string('status');
            $table->bigInteger('id_user')->unsigned();
            $table->string('status_penyewaan');
            $table->date('tgl_sewa');
            $table->integer('nomor_transaksi_penyewaan');
            $table->integer('jumlah_barang_penyewaan');
            $table->string('kondisi_kembali_penyewaan');
            $table->integer ('id_sepeda')->unsigned();
            $table->string('token');
            $table->timestamps();

            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('id_sepeda')
            ->references('id')
            ->on('sepedas')
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
        Schema::dropIfExists('penyewas');
    }
}
