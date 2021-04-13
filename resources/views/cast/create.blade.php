@extends('layout.master');
@section('content')

<div class="card card-primary ml-3 mr-3">
    <div class="card-header">
      <h3 class="card-title">New Cast</h3>
    </div>
    <!-- form start -->
    <form action="/cast" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="castName">Nama Pemain</label>
          <input type="text" class="form-control" id="castName" name="castName" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
          <label for="castAge">Umur</label>
          <input type="text" class="form-control" id="castAge" name="castAge" placeholder="Umur Pemain">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tambah Pemain</button>
      </div>
    </form>
  </div>

@endsection