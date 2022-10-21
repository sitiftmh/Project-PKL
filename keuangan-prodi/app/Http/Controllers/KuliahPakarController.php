<?php

namespace App\Http\Controllers;

use App\Models\kuliahpakar;
use Illuminate\Http\Request;

class KuliahPakarController extends Controller
{
    public function index(){
        $kuliahpakar = Kuliahpakar::all();
        return view('kuliahpakar.index',compact(['kuliahpakar']));
    }

    public function create(){
        return view('kuliahpakar.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        Kuliahpakar::create($request->except(['_token', 'submit']));
        return redirect('/kuliahpakar');
    }

    public function edit($id)
    {
        $kuliahpakar = KuliahPakar::find($id);
        return view('kuliahpakar.edit', compact(['kuliahpakar']));
    }

    public function update($id, Request $request){
        $kuliahpakar = KuliahPakar::find($id);
        $kuliahpakar->update($request->except(['_token', 'submit']));
        return redirect('/kuliahpakar');
    }

    public function destroy($id, Request $request){
        $kuliahpakar = kuliahpakar::find($id);
        $kuliahpakar->delete($request->except(['_token', 'submit']));
        return redirect('/kuliahpakar');
    }
}
