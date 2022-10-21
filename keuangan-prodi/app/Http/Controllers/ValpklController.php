<?php

namespace App\Http\Controllers;

use App\Models\Pkl;
use Illuminate\Http\Request;

class ValpklController extends Controller
{
    public function index()
    {
        $pkl = Pkl::all();
        return view('validasi.pkl.pkl', compact(['pkl']));
    }

    public function setuju($id)
    {
        $pkl = Pkl::find($id);
        $pkl->status=1;
        $pkl->save();
        return redirect('/valpkl');
    }

    public function tolak($id)
    {
        $pkl = Pkl::find($id);
        $pkl->status=2;
        $pkl->save();
        return redirect('/valpkl');
    }

    public function view()
    {
        $pkl = Pkl::all();
        return view('statuspkl', compact(['pkl']));
    }
}
