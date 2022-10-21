<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asosiasi extends Model
{
    use HasFactory;
    protected $table = 'asosiasi';
    //protected $fillable = ['tanggal_pengajuan', 'uraian', 'volume', 'satuan', 'keterangan', 'kegiatan', 'total_biaya'];
    protected $guarded = [];
}
