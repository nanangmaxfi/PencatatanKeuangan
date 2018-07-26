<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    function create(){
        return view('kategori.add');
    }

    function store(Request $request){
        $this->validate($request,[
            'nama' => 'required',
        ]);

        //inisiasi data
        $simpan = new Kategori();
        $simpan->jenis = $request->jenis;
        $simpan->nama = $request->nama;
        $simpan->deskripsi = $request->deskripsi;

        //save to database
        $simpan->save();

        return redirect(url('/'));
    }

    function list($jenis){
        $kategori = Kategori::where('jenis', $jenis)->get();

        return view('kategori.list', ['kategori'=>$kategori]);
    }

    function edit($id){
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

    function update(Request $request, $id){
        $update = Kategori::findOrFail($id);

        $this->validate($request,[
            'nama' => 'required',
        ]);

        //inisiasi data
        $update->jenis = $request->jenis;
        $update->nama = $request->nama;
        $update->deskripsi = $request->deskripsi;

        //save to database
        $update->save();

        return redirect(url('/'));
    }

    function destroy($id){
        $delete = Kategori::findOrFail($id);
        $delete->delete();

        return redirect(url('/'));
    }
}
