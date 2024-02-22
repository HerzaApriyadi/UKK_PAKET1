@extends('layouts.main')
@section('dashboard')

<div class="card">
    <form action="/simpan-buku" method="post">
    <div class="card-header">
        @csrf
      <h4>tambah buku</h4>
    </div>
    <div class="card-body">
      <div class="alert alert-info">
      </div>
      <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" class="form-control">
      </div>
      
      <div class="form-group">
        <label>Penulis</label>
        <textarea class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label>Tahun Terbit</label>
        <input type="date" class="form-control">
      </div>
      
      
        
     
      <div class="form-group">
        <label>File</label>
        <input type="file" class="form-control">
      </div>

   
    <div class="card-footer text-right">
      <button class="btn btn-primary mr-1" type="submit">Submit</button>
    </div>
</form>
  </div>
@endsection