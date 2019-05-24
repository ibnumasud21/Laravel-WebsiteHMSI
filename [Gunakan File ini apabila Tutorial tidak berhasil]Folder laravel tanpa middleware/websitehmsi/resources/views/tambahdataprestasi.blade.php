@extends('master')



@section('konten')



<div class="inputdataa">


<h3 text-align:center>Tambah Data Prestasi</h3>
<div class="inputdata">
<br/>

<form action="/data/prestasi/tambah" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul Prestasi</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Lomba Makan" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Judul prestasi harus sesuai dengan sertifikat</small>
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" placeholder="10xx10xx" required="required">
  </div>
  <div class="form-group">
    <label for="tahun_prestasi">Tahun Prestasi</label>
    <input type="number" class="form-control" id="tahun_prestasi" name="tahun_prestasi" placeholder="2018" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Mohon untuk tidak salah mengisi tahun prestasi</small>
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<br/>
<a href="/data/prestasi">Tekan disini untuk kembali </a>
</div>
</div>
@endsection
