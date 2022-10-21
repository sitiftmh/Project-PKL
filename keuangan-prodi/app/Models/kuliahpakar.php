<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuliahpakar extends Model
{
    use HasFactory;
    protected $table = 'kuliahpakar';
    //protected $fillable = ['tanggal_pengajuan', 'nama_kegiatan', 'uraian', 'harga_satuan', 'volume', 'satuan', 'total_biaya',];
    protected $guarded = [];
}
