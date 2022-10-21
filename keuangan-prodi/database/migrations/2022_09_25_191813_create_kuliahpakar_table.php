<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuliahpakarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuliahpakar', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengajuan');
            $table->string('nama_kegiatan');
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
        Schema::dropIfExists('kuliahpakar');
    }
}
