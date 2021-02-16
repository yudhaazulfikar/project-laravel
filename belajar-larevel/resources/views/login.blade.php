@extends('master.master')
@section('title', 'Login')

@section('content')

  <form action="{{ route('postlogin')}}" method="POST">
    @csrf 
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Masukan Email Anda</small>
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input name='password' type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">login</button>
</form>
  

@endsection
