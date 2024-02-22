@extends('layouts.main')

@section('dashboard')
<div class="col " style="height: 97px; margin-top: 20px">
  <h1>Data Siswa</h1>
<a href="{{ route ('create.index')}}" class="btn btn-primary">Tambah Data</a>
@if (Session::get('success'))
    <h5>{{ Session::get('success') }}</h5>

@elseif (Session::get('failed'))
    <h5>{{ Session::get('failed') }}</h5>

@endif
<div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-md">
        <thead><tr>
          <th>No</th>
          <th>judul</th>
          <th>penulis</th>
          <th>tahun terbit</th>
          <th>Status</th>
          <th>Foto</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $book->Judul }}</td>
    <td>{{ $book->penulis }}</td>
    <td>{{ $book->tahun_terbit }}</td>
    <td>{{ $book->status }}</td>            
    <td><img src="/storage/books/{{ $book->foto }}" width="200"></td>
    <td><a href="/edit-buku/{{ $book->id }}" class="btn btn-primary btn-sm">Edit</a> <a href="/hapus-buku/{{ $book->id }}" class="btn btn-danger btn-sm">Hapus</a></td>
    </td>
</tr>
@endforeach

       
      </tbody></table>
    </div>
  </div>
@endsection