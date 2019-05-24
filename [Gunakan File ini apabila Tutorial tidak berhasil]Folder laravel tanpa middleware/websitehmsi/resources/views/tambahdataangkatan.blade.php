@extends('master')



@section('konten')



<div class="inputdataa">


<h3 text-align:center>Tambah Data Angkatan</h3>
<div class="inputdata">
<br/>

<form action="/data/angkatan/tambah" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="tahun_angkatan">Tahun Angkatan</label>
    <input type="number" class="form-control" id="tahun_angkatan" name="tahun_angkatan" placeholder="Ex : 2019" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Tahun angkatan harus lebih dari 2013</small>
  </div>
  <div class="form-group">
    <label for="jumlah_angkatan">Jumlah Angkatan</label>
    <input type="text" class="form-control" id="jumlah_angkatan" name="jumlah_angkatan" placeholder="123" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Masukkan jumlah angkatan sesuai dengan yang ada pada Data Mahasiswa Angkatan</small>
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<br/>
<a href="/data/angkatan">Tekan disini untuk kembali </a>
</div>
</div>
@endsection
