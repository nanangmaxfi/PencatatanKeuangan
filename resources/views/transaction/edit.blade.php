@extends('layout.app')

@section('content')

<div class="card card-login mx-auto mt-5">
        <div class="card-header">Edit Transaksi</div>
        <div class="card-body">
          <form method="POST" action="{{url('/transaction/update',$transaction->id)}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="jenis">Jenis</label><br>
                <select name="jenis" readonly>
                    <option value="{{$transaction->jenis}}" selected>{{$transaction->jenis}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label><br>
                <select name="kategori">
                        <option value="{{$transaction->kategori}}">{{$transaction->kategori}}</option>
                </select>
            </div>
            <div class="form-group">
              <label for="nominal">Nominal</label>
              <input class="form-control" id="nominal" name="nominal" type="text" placeholder="Masukkan Nominal" value="{{$transaction->nominal}}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label><br/>
                <textarea name="deskripsi" id="deskripsi">{{$transaction->deskripsi}}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Edit">
          </form>
        </div>
      </div>

@endsection