<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    use HasFactory;
    protected $table = 'laboratorium';
    //protected $fillable = ['tanggal_pengajuan', 'uraian', 'volume', 'harga_satuan', 'total_biaya'];
    protected $guarded = [];
}
