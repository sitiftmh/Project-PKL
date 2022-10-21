<?php

namespace App\Http\Controllers;

use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    public function index()
    {
        $tugasakhir = TugasAkhir::all();
        return view('tugasakhir.index', compact((['tugasakhir'])));
    }

    public function create()
    {
        return view('tugasakhir.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        TugasAkhir::create($request->except(['_token', 'submit']));
        return redirect('/tugasakhir');
    }

    public function edit($id)
    {
        $tugasakhir = TugasAkhir::find($id);
        return view('tugasakhir.edit', compact(['tugasakhir']));
    }

    public function update($id, Request $request){
        $tugasakhir = TugasAkhir::find($id);
        $tugasakhir->update($request->except(['_token', 'submit']));
        return redirect('/tugasakhir');
    }

    public function destroy($id, Request $request){
        $tugasakhir = TugasAkhir::find($id);
        $tugasakhir->delete($request->except(['_token', 'submit']));
        return redirect('/tugasakhir');
    }

}
