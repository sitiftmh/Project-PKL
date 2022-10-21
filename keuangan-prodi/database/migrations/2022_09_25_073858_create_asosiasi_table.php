<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsosiasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asosiasi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengajuan');
            $table->string('uraian');
            $table->string('harga_satuan');
            $table->string('volume');
            $table->string('satuan');
            $table->string('keterangan');
            $table->string('kegiatan');
            $table->string('total_biaya');
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
        Schema::dropIfExists('asosiasi');
    }
}
