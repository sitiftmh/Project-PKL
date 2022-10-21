<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Http\Request;

class VallaboratoriumController extends Controller
{
    public function index()
    {
        $laboratorium= Laboratorium::all();
        return view('validasi.laboratorium.laboratorium', compact(['laboratorium']));
    }

    public function setuju($id)
    {
        $laboratorium = Laboratorium::find($id);
        $laboratorium->status=1;
        $laboratorium->save();
        return redirect('/vallaboratorium');
    }

    public function tolak($id)
    {
        $laboratorium = Laboratorium::find($id);
        $laboratorium->status=2;
        $laboratorium->save();
        return redirect('/vallaboratorium');
    }

    public function view()
    {
        $laboratorium= Laboratorium::all();
        return view('statuslaboratorium', compact(['laboratorium']));
    }

}
