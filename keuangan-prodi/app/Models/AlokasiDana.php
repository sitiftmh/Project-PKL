<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlokasiDana extends Model
{
    use HasFactory;
    protected $table = 'alokasidana';
    //protected $fillable = ['tanggal_pengajuan', 'indikatif_program', 'uraian', 'jumlah_biaya', 'keterangan'];
    protected $guarded = [];
}
