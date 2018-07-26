<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class HomeController extends Controller
{
    //
    function index(){
        $nominal = Transaction::all();
        $pemasukan = Transaction::where('jenis', 'pemasukan')->get();
        $pengeluaran = Transaction::where('jenis', 'pengeluaran')->get();

        return view('home',['nominal'=>$nominal,'pemasukan'=>$pemasukan,'pengeluaran'=>$pengeluaran]);
    }
}
