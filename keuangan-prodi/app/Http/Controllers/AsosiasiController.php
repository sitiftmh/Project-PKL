<?php

namespace App\Http\Controllers;

use App\Models\Asosiasi;
use Illuminate\Http\Request;

class AsosiasiController extends Controller
{
    public function index(){
        $asosiasi = Asosiasi::all();
        return view('asosiasi.index',compact(['asosiasi']));
    }

    public function create(){
        return view('asosiasi.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        Asosiasi::create($request->except(['_token', 'submit']));
        return redirect('/asosiasi');
    }

    public function edit($id)
    {
        $asosiasi = Asosiasi::find($id);
        return view('asosiasi.edit', compact(['asosiasi']));
    }

    public function update($id, Request $request){
        $asosiasi = Asosiasi::find($id);
        $asosiasi->update($request->except(['_token', 'submit']));
        return redirect('/asosiasi');
    }

    public function destroy($id, Request $request){
        $asosiasi = Asosiasi::find($id);
        $asosiasi->delete($request->except(['_token', 'submit']));
        return redirect('/asosiasi');
    }



}
