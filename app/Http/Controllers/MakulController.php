<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }

    public function store(Request $request)
    {
        Makul::create($request->all());
        alert()->success('Success!!!','You Did It!!');
        return redirect()->route('matakuliah');
    }

    public function edit($id)
    {
        $makul = Makul::find($id); 
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Yeyyy Berhasil Mengedit Data', 'success');
        return redirect()->route('matakuliah');
    }
    public function destroy($id){
        $makul = Makul::find($id);
        $makul->delete();
        toast('Yeyyy Berhasil Menghapus Data', 'success');
        return redirect()->route('matakuliah');

    }
}