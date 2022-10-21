<?php

namespace App\Http\Controllers;

use App\Models\Reakreditasi;
use Illuminate\Http\Request;

class ValreakreditasiController extends Controller
{
    public function index()
    {
        $reakreditasi= Reakreditasi::all();
        return view('validasi.reakreditasi.reakreditasi', compact(['reakreditasi']));
    }

    public function setuju($id)
    {
        $reakreditasi = Reakreditasi::find($id);
        $reakreditasi->status=1;
        $reakreditasi->save();
        return redirect('/valreakreditasi');
    }

    public function tolak($id)
    {
        $reakreditasi = Reakreditasi::find($id);
        $reakreditasi->status=2;
        $reakreditasi->save();
        return redirect('/valreakreditasi');
    }

    public function view()
    {
        $reakreditasi= Reakreditasi::all();
        return view('statusreakreditasi', compact(['reakreditasi']));
    }

}
