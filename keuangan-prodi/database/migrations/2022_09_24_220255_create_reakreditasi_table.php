<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReakreditasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reakreditasi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengajuan');
            $table->string('uraian');
            $table->string('keterangan');
            $table->string('volume');
            $table->string('satuan');
            $table->string('harga_satuan');
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
        Schema::dropIfExists('reakreditasi');
    }
}
