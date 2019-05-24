@extends('master')



@section('konten')



<div class="inputdataa">


<h3 text-align:center>Tambah Data Dosen</h3>
<div class="inputdata">
<br/>

<form action="/data/dosen/tambah" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="id_dosen">NIDN</label>
    <input type="text" class="form-control" id="id_dosen" name="id_dosen" placeholder="123456789012" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">NIDN harus sesuai dengan aslinya</small>
  </div>
  <div class="form-group">
    <label for="nama_dosen">Nama Dosen</label>
    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Prof. DR. Ibnu Mas'ud" required="required">
  </div>
  <div class="form-group">
    <label for="id_program_studi">ID Program Studi</label>
    <input type="number" class="form-control" id="id_program_studi" name="id_program_studi" placeholder=" " aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Mohon mengisi ID Program Studi dengan melihat data Program Studi</small>
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<br/>
<a href="/data/dosen">Tekan disini untuk kembali </a>
</div>
</div>
@endsection
