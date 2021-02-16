@extends('master.master')
@section('title', 'View data');

@section('content');

     <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
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
            <form method="POST" id=" {{ $i }}" action="{{ route('siswa.destroy', $siswa->id) }}">
            @csrf
                <input type="hidden" name="_method" value="DELETE">
            </form>
            <tr>  
            <th>{{$i}}</th>
            <th>{{$siswa->name}}</th>
            <th>{{$siswa->telepon}}</th>
            <th>{{$siswa->alamat}}</th>
            <th>
            <div class="btn-group">
              <a href="{{ route('siswa.edit', $siswa->id) }}" type="button" class="btn btn-success">Edit</a>
              <button action="{{ route('siswa.destroy', $siswa->id) }}"  type="submit" form="{{ $i }}" onclick="return confirm('Yakin Ingin Menghapus Data?')" class="btn btn-danger" >Delete</button>
            </div>
            </th>
            </tr>
            </form>
            @php
                $i++;
            @endphp 
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection