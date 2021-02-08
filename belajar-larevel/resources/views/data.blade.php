@extends('master.master')
@section('title', 'about')

@section('content')

  <form action="{{ route ('siswa.store') }}" method="post">
    @csrf 
  <div class="form-group">
    <label for="exampleInputEmail1">Nama:</label>
    <input name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Masukan Nama Lengkap Anda</small>
    @error('name')
    <div class="small text-danger">Masukan min 5 karakter</div>
    @enderror
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Telepon</label>
    <input name='telepon' type="number" class="form-control" id="exampleInputPassword1">
    @error('telepon')
    <div class="small text-danger">Masukan min 11 angka</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input name='alamat' type="text" class="form-control" id="exampleInputPassword1">
    @error('alamat')
    <div class="small text-danger">Masukan max 30 huruf</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</forn>
  

@endsection
