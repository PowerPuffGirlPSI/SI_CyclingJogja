<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DroptableToPenyewas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->dropColumn(['kondisi', 'status', 'status_penyewaan','kondisi_kembali_penyewaan']);
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
            //
        });
    }
}
