<?php

namespace App\Http\Controllers;

use App\Models\Asosiasi;
use App\Models\kuliahpakar;
use App\Models\Laboratorium;
use App\Models\Pkl;
use App\Models\Reakreditasi;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index (){
        $asosiasi = Asosiasi::where('status',1)->get();
        $kuliahpakar = kuliahpakar::where('status',1)->get();
        $laboratorium = Laboratorium::where('status',1)->get();
        $pkl = Pkl::where('status',1)->get();
        $reakreditasi = Reakreditasi::where('status',1)->get();
        $tugasakhir = TugasAkhir::where('status',1)->get();
        return view('laporan.laporan', compact(['asosiasi','kuliahpakar', 'laboratorium', 'pkl', 'reakreditasi', 'tugasakhir']));
    }
}
