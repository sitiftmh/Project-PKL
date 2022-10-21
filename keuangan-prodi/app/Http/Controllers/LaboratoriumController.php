<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    public function index(){
        $laboratorium = Laboratorium::all();
        return view('laboratorium.index',compact(['laboratorium']));
    }

    public function create(){
        return view('laboratorium.create');
    }

    public function store(Request $request){
        #dd($request->except(['_token', 'submit']));
        Laboratorium::create($request->except(['_token', 'submit']));
        return redirect('/laboratorium');
    }

    public function edit($id){
        $laboratorium = Laboratorium::find($id);
        return view('laboratorium.edit', compact(['laboratorium']));
    }

    public function update($id, Request $request){
        $laboratorium = Laboratorium::find($id);
        $laboratorium->update($request->except(['_token', 'submit']));
        return redirect('/laboratorium');
    }

    public function destroy($id){
        $laboratorium = Laboratorium::find($id);
        $laboratorium->delete();
        return redirect('/laboratorium');
    }

}