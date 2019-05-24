@extends('master')

@section('judul_halaman' )


@section('konten')
<div class="inputdataa">
<form action="/calendar/tambah" method="post">
  <h3 text-align:center>Tambah Kegiatan</h3>
  <div class="inputdata">
  <br/>
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Nama Kegiatan</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Berenang" aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Masukkan kegiatan yang akan dijadwalkan</small>
  </div>
  <div class="form-group">
    <label for="description">Deskripsi Kegiatan</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="123" aria-describedby="Bantuan"aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Masukkan Deskripsi Kegiatan</small>
  </div>
  <div class="form-group">
    <label for="task_date">Waktu Dimulai</label>
    <input type="text" class="form-control date" id="task_date" name="task_date" placeholder="123" aria-describedby="Bantuan"aria-describedby="Bantuan" required="required">
    <small id="Bantuan" class="form-text text-muted">Masukkan waktu kegiatan</small>
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="spinner-grow spinner-grow-sm"></span>
    Submit
  </button>
</form>
<a href="/calendar" class="ml-2">Tekan disini untuk kembali </a>
</div>
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>

@endsection
