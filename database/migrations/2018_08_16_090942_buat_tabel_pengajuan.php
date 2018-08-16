<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelPengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dari');
            $table->date('sampai');
            $table->date('tgl_dibuat');
            $table->string('keterangan');
            $table->smallInteger('status');

            $table->unsignedInteger('pemohon');
            $table->unsignedInteger('penyetuju');
            $table->unsignedInteger('jenis_cuti_id');

            $table->foreign('pemohon')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('penyetuju')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jenis_cuti_id')->references('id')->on('jenis_cutis')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('pengajuans');
    }
}
