<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Transaction;

class TransactionController extends Controller
{
    function pilih(){
        return view('transaction.pilih');
    }

    function create($jenis){
        $kategori = Kategori::where('jenis', $jenis)->get();

        return view('transaction.add',['kategori'=>$kategori,'jenis'=>$jenis]);
    }

    function store(Request $request){
        $this->validate($request,[
            'nominal' => 'required',
        ]);

        //inisiasi data
        $simpan = new Transaction();
        $simpan->jenis = $request->jenis;
        $simpan->kategori = $request->kategori;
        $simpan->nominal = $request->nominal;
        $simpan->deskripsi = $request->deskripsi;

        //save to database
        $simpan->save();

        return redirect(url('/'));
    }

    function list($jenis){
        $transaction = Transaction::where('jenis', $jenis)->get();

        return view('transaction.list', ['transaction'=>$transaction]);
    }

    function edit($id){
        $transaction = Transaction::findOrFail($id);

        return view('transaction.edit', compact('transaction'));
    }

    function update(Request $request, $id){
        $update = Transaction::findOrFail($id);

        $this->validate($request,[
            'nominal' => 'required',
        ]);

        //inisiasi data
        $update->jenis = $request->jenis;
        $update->kategori = $request->kategori;
        $update->nominal = $request->nominal;
        $update->deskripsi = $request->deskripsi;

        //save to database
        $update->save();

        return redirect(url('/'));
    }

    function destroy($id){
        $delete = Transaction::findOrFail($id);
        $delete->delete();

        return redirect(url('/'));
    }
}
