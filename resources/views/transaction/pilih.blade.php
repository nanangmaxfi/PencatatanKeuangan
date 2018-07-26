@extends('layout.app')

@section('content')

<div class="card card-login mx-auto mt-5">
        <div class="card-header">Tambah Transaksi</div>
        <div class="card-body">
          
          <a href="{{url('/transaction/tambah/pemasukan')}}" class="btn btn-primary">Pemasukan</a>
          <a href="{{url('/transaction/tambah/pengeluaran')}}" class="btn btn-primary">Pengeluaran</a>
        </div>
      </div>

@endsection