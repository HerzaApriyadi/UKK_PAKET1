@extends('layouts.main')
@section('dashboard')
<div class="row">
  <div class="row" style="margin-top: 20px">
    <form action="/simpan-buku" method="post" class="col-lg-4" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <p>Judul</p>
            <input class="form-control" name="judul" type="text">
          </div>
        <div class="form-group">
            <p>penulis</p>
            <input class="form-control" name="penulis" type="text">
          </div>
            

          <div class="form-group">
            <p>Tahun Terbit</p>
            <input class="form-control" name="tahun_terbit" type="text">
          </div>

          <div class="form-group">
            <p>Foto</p>
            <input type="file"class="form-control" name="image" type="text">
            <p class="help-block">Wajib di isi !!</p>
          </div>
          

        <button type="submit">Simpan</button>
    </form>
</div>
</div>
@endsection