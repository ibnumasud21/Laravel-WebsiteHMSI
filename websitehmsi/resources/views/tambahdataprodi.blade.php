@extends('master')



@section('konten')



<div class="inputdataa">


<h3 text-align:center>Tambah Data Program Studi</h3>
<div class="inputdata">
<br/>

<form action="/data/prodi/tambah" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="nama_prodi">Nama Program Studi </label>
    <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Sistem Informasi" required="required">
  </div>
  <div class="form-group">
    <label for="jumlah_mhs">Jumlah Mahasiswa</label>
    <input type="number" class="form-control" id="jumlah_mhs" name="jumlah_mhs" placeholder=" " aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Mohon mengisi jumlah mahasiswa dengan benar</small>
  </div>
  <div class="form-group">
    <label for="jumlah_dosen">Jumlah Dosen</label>
    <input type="number" class="form-control" id="jumlah_dosen" name="jumlah_dosen" placeholder=" " aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Data jumlah dosen harus sesuai dengan aslinya</small>
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<br/>
<a href="/data/prodi">Tekan disini untuk kembali </a>
</div>
</div>
@endsection
