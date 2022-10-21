<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasakhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugasakhir', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengajuan');
            $table->string('uraian');
            $table->string('harga_satuan');
            $table->string('volume');
            $table->string('satuan');
            $table->string('total_biaya');
            $table->string('keterangan');
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
        Schema::dropIfExists('tugasakhir');
    }
}
