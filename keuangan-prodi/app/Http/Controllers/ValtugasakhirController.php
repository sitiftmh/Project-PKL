<?php

namespace App\Http\Controllers;

use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class ValtugasakhirController extends Controller
{
    public function index()
    {
        $tugasakhir= TugasAkhir::all();
        return view('validasi.tugasakhir.tugasakhir', compact(['tugasakhir']));
    }

    public function setuju($id)
    {
        $tugasakhir = TugasAkhir::find($id);
        $tugasakhir->status=1;
        $tugasakhir->save();
        return redirect('/valtugasakhir');
    }

    public function tolak($id)
    {
        $tugasakhir = TugasAkhir::find($id);
        $tugasakhir->status=2;
        $tugasakhir->save();
        return redirect('/valtugasakhir');
    }

    public function view()
    {
        $tugasakhir= TugasAkhir::all();
        return view('statustugasakhir', compact(['tugasakhir']));
    }
}
