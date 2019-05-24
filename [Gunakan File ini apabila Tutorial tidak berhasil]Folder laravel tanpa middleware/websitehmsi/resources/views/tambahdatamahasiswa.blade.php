@extends('master')



@section('konten')



<div class="inputdataa">


<h3 text-align:center>Tambah Data Mahasiswa</h3>
<div class="inputdata">
<br/>

<form action="/data/mahasiswa/tambah" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="number" class="form-control" id="nim" name="nim" placeholder="10xx10xx" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Masukkan NIM sesuai dengan yang ada pada Kartu Tanda Mahasiswa</small>
  </div>
  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Bambang Pamungkas" required="required">
  </div>
  <div class="form-group">
    <label for="prodi">Program Studi</label>
    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Sistem Informasi" required="required">
  </div>
  <div class="form-group">
    <label for="jenkel">Jenis Kelamin</label>
    <input type="text" class="form-control" id="jenkel" name="jenkel" placeholder="L / P" required="required">
  </div>
  <div class="form-group">
    <label for="keanggotaan">Keanggotaan</label>
    <input type="text" class="form-control" id="keanggotaan" name="keanggotaan" placeholder="Kepala PSDM" required="required">
  </div>
  <div class="form-group">
    <label for="angkatan">Angkatan</label>
    <input type="number" class="form-control" id="angkatan" name="angkatan" placeholder="20xx" required="required">
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<br/>
<a href="/data/mahasiswa">Tekan disini untuk kembali </a>
</div>
</div>
@endsection
