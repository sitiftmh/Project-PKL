<?php

namespace App\Http\Controllers;

use App\Models\AlokasiDana;
use Illuminate\Http\Request;

class AlokasiDanaController extends Controller
{
    public function index()
    {
        $alokasidana = AlokasiDana::all();
        return view('alokasidana.index', compact((['alokasidana'])));
    }

    public function create()
    {
        return view('alokasidana.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        AlokasiDana::create($request->except(['_token', 'submit']));
        return redirect('/alokasidana');
    }

    public function edit($id)
    {
        $alokasidana = AlokasiDana::find($id);
        return view('alokasidana.edit', compact(['alokasidana']));
    }

    public function update($id, Request $request){
        $alokasidana = AlokasiDana::find($id);
        $alokasidana->update($request->except(['_token', 'submit']));
        return redirect('/alokasidana');
    }

    public function destroy($id, Request $request){
        $alokasidana = AlokasiDana::find($id);
        $alokasidana->delete($request->except(['_token', 'submit']));
        return redirect('/alokasidana');
    }

    public function view()
    {
        $alokasidana = AlokasiDana::all();
        return view('danauser', compact((['alokasidana'])));
    }
}
