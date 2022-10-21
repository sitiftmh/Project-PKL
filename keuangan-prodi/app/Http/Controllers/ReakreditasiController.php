<?php

namespace App\Http\Controllers;

use App\Models\Reakreditasi;
use Illuminate\Http\Request;

class ReakreditasiController extends Controller
{
    public function index()
    {
        $reakreditasi = Reakreditasi::all();
        return view('reakreditasi.index', compact((['reakreditasi'])));
    }

    public function create()
    {
        return view('reakreditasi.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        Reakreditasi::create($request->except(['_token', 'submit']));
        return redirect('/reakreditasi');
    }

    public function edit($id)
    {
        $reakreditasi = Reakreditasi::find($id);
        return view('reakreditasi.edit', compact(['reakreditasi']));
    }

    public function update($id, Request $request){
        $reakreditasi = Reakreditasi::find($id);
        $reakreditasi->update($request->except(['_token', 'submit']));
        return redirect('/reakreditasi');
    }

    public function destroy($id, Request $request){
        $reakreditasi = Reakreditasi::find($id);
        $reakreditasi->delete($request->except(['_token', 'submit']));
        return redirect('/reakreditasi');
    }
}
