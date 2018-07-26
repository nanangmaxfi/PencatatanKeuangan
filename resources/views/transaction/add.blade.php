@extends('layout.app')

@section('content')

<div class="card card-login mx-auto mt-5">
        <div class="card-header">Tambah Transaksi {{$jenis}}</div>
        <div class="card-body">
          <form method="POST" action="{{url('/transaction/store')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="jenis">Jenis</label><br>
                <select name="jenis">
                    <option value="{{$jenis}}">{{$jenis}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label><br>
                <select name="kategori">
                    @foreach($kategori as $item)
                        <option value="{{$item->nama}}">{{$item->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="nominal">Nominal</label>
              <input class="form-control" id="nominal" name="nominal" type="text" placeholder="Masukkan Nominal" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label><br/>
                <textarea name="deskripsi" id="deskripsi"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Tambah">
          </form>
        </div>
      </div>

@endsection