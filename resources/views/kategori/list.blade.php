@extends('layout.app')

@section('content')

<div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i> Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach($kategori as $item)
                  <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td><a href="{{ url('/kategori/edit',$item->id) }}" class="btn bg-olive"><i class="fa fa-pencil-square-o"></i> Edit</a> <a class="btn btn-danger" href="{{ url('/kategori/delete',$item->id) }}"><i class="fa fa-trash"></i>Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>

@endsection