<?php

namespace App\Http\Controllers;

use App\Models\Pkl;
use Illuminate\Http\Request;

class PklController extends Controller
{
    public function index()
    {
        $pkl = Pkl::all();
        return view('pkl.index', compact((['pkl'])));
    }

    public function create()
    {
        return view('pkl.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        Pkl::create($request->except(['_token', 'submit']));
        return redirect('/pkl');
    }

    public function edit($id)
    {
        $pkl = Pkl::find($id);
        return view('pkl.edit', compact(['pkl']));
    }

    public function update($id, Request $request){
        $pkl = Pkl::find($id);
        $pkl->update($request->except(['_token', 'submit']));
        return redirect('/pkl');
    }

    public function destroy($id, Request $request){
        $pkl = Pkl::find($id);
        $pkl->delete($request->except(['_token', 'submit']));
        return redirect('/pkl');
    }
}
