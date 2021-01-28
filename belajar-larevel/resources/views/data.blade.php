@extends('master.master')
@section('title', 'about')

@section('content')

    @csrf 
  <div class="form-group">
    <label for="exampleInputEmail1">Nama:</label>
    <input name='name  ' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Telepon</label>
    <input name='telepon' type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input name='alamat' type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

  

@endsection
