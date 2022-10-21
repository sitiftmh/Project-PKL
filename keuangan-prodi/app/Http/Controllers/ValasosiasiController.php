<?php

namespace App\Http\Controllers;

use App\Models\Asosiasi;
use Illuminate\Http\Request;

class ValasosiasiController extends Controller
{
    public function index()
    {
        $asosiasi = Asosiasi::all();
        return view('validasi.asosiasi.asosiasi', compact(['asosiasi']));
    }

    public function setuju($id)
    {
        $asosiasi = Asosiasi::find($id);
        $asosiasi->status=1;
        $asosiasi->save();
        return redirect('/valasosiasi');
    }

    public function tolak($id)
    {
        $asosiasi = asosiasi::find($id);
        $asosiasi->status=2;
        $asosiasi->save();
        return redirect('/valasosiasi');
    }

    public function view()
    {
        $asosiasi = Asosiasi::all();
        return view('statusasosiasi', compact(['asosiasi']));
    }
}
