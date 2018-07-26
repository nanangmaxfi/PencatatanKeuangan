@extends('layout.app')

@section('content')

<div class="card card-login mx-auto mt-5">
        <div class="card-header">Tambah Kategori</div>
        <div class="card-body">
          <form method="POST" action="{{url('/kategori/store')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="jenis">Jenis</label><br>
                <select name="jenis">
                    <option value="Pemasukan">Pemasukan</option>
                    <option value="Pengeluaran">Pengeluaran</option>
                </select>
            </div>
            <div class="form-group">
              <label for="nama">Kategori</label>
              <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan kategori" required>
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