<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reakreditasi extends Model
{
    use HasFactory;
    protected $table = 'reakreditasi';
    //protected $fillable = ['tanggal_pengajuan', 'uraian', 'keterangan', 'volume', 'satuan', 'harga_satuan', 'total_biaya'];
    protected $guarded = [];
}
