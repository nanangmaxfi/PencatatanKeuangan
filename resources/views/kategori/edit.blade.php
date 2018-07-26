@extends('layout.app')

@section('content')

<div class="card card-login mx-auto mt-5">
        <div class="card-header">Tambah Kategori</div>
        <div class="card-body">
          <form method="POST" action="{{url('/kategori/update',$kategori->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="jenis">Jenis</label><br>
                <select name="jenis" readonly>
                    <option value="{{$kategori->jenis}}" selected>{{$kategori->jenis}}</option>
                </select>
            </div>
            <div class="form-group">
              <label for="nama">Kategori</label>
              <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan kategori" value="{{$kategori->nama}}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label><br/>
                <textarea name="deskripsi" id="deskripsi">{{$kategori->deskripsi}}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Edit">
          </form>
        </div>
      </div>

@endsection