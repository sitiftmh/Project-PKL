<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkl extends Model
{
    use HasFactory;
    protected $table = 'pkl';
    //protected $fillable = ['tanggal_pengajuan', 'uraian', 'harga_satuan', 'volume', 'satuan', 'total_biaya', 'keterangan'];
    protected $guarded = [];
}
