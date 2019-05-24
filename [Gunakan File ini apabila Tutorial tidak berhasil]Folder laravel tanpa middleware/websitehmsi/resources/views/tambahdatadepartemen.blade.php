@extends('master')



@section('konten')



<div class="inputdataa">


<h3 text-align:center>Tambah Data Departemen</h3>
<div class="inputdata">
<br/>

<form action="/data/departemen/tambah" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="nama_departemen">Nama Departemen</label>
    <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" placeholder="Pengembangan Sumber Daya Mahasiswa" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Nama departemen tidak boleh disingkat</small>
  </div>
  <div class="form-group">
    <label for="kepala_departemen">Kepala Departemen</label>
    <input type="text" class="form-control" id="kepala_departemen" name="kepala_departemen" placeholder="Bambang Pamungkas" required="required">
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="number" class="form-control" id="nim" name="nim" placeholder="10xx10xx" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Masukkan NIM sesuai dengan yang ada pada Kartu Tanda Mahasiswa</small>
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<br/>
<a href="/data/departemen">Tekan disini untuk kembali </a>
</div>
</div>
@endsection
