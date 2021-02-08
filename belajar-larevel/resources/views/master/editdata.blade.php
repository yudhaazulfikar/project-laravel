@extends('master.master')
@section('master', 'editdata')

@section('content')
<form action="{{ route ('siswa.update', $datasiswa->id) }}" method="post">
    @csrf

  <input type="hidden" name="_method" value="PUT">

  <div class="form-group">
    <label for="exampleInputEmail1">Nama:</label>
    <input name='name' type="text" class="form-control" value="{{ $datasiswa->name }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telepon</label>
    <input name='telepon' type="number" class="form-control" value="{{ $datasiswa->telepon }}">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input name='alamat' type="text" class="form-control" value="{{ $datasiswa->alamat }}">
  </div>
  <button type="submit" class="btn btn-primary" value="update" name="proses">Submit</button>
</form>
@endsection
