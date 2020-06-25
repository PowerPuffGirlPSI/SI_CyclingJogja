<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditColumnToPenyewas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->string('kondisi')->nullable();
            // $table->string('status')->nullable();
            // $table->string('status_penyewaan')->nullable();
            // $table->string('kondisi_kembali_penyewaan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->drppColumn('kondisi');
            // $table->drppColumn('status');
            // $table->drppColumn('status_penyewaan');
            // $table->drppColumn('kondisi_kembali_penyewaan');
        });
    }
}
