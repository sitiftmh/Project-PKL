<?php

namespace App\Http\Controllers;

use App\Models\kuliahpakar;
use Illuminate\Http\Request;

class ValkuliahpakarController extends Controller
{
    public function index()
    {
        $kuliahpakar= kuliahpakar::all();
        return view('validasi.kuliahpakar.kuliahpakar', compact(['kuliahpakar']));
    }

    public function setuju($id)
    {
        $kuliahpakar = kuliahpakar::find($id);
        $kuliahpakar->status=1;
        $kuliahpakar->save();
        return redirect('/valkuliahpakar');
    }

    public function tolak($id)
    {
        $kuliahpakar = kuliahpakar::find($id);
        $kuliahpakar->status=2;
        $kuliahpakar->save();
        return redirect('/valkuliahpakar');
    }

    public function view()
    {
        $kuliahpakar= kuliahpakar::all();
        return view('statuskuliahpakar', compact(['kuliahpakar']));
    }
}
