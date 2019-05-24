@extends('usermaster')



@section('konten')



<div class="inputdataa">


<h3 text-align:center>SARAN DAN MASUKAN</h3>
<div class="inputdata">
<br/>

<form action="/feedback/tambah" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Isilah kolom nama dengan nama asli</small>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="ibnumasud11112@gmail.com" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Email harus sesuai dengan aslinya</small>
  </div>
  <div class="form-group">
    <label for="subjek">Subjek</label>
    <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Tampilan WEB kurang animasi" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Kolom ini diisi dengan perihal</small>
  </div>
  <div class="form-group">
    <label for="message">Pesan</label>
    <input type="text" class="form-control" id="message" name="message" required="required">
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<br/>
</div>
</div>
@endsection
