@extends('master.master')
@section('master', 'tampildata');

@section('content');

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php
              $i = 1;
            
            @endphp
            @foreach ($datasiswa as $siswa)
            <tr>
            
            <th>{{$siswa->name}}</th>
            <th>{{$siswa->telepon}}</th>
            <th>{{$siswa->alamat}}</th>
            <th>
            <div class="btn-group">
              <button type="button" class="btn btn-success">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </div></th>
            </tr>
              
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection