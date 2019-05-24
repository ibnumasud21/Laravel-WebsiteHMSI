@extends('master')

@section('judul_halaman', )


@section('konten')
<div class="inputdataa justify-content-center">

<h3>Update Data Calendar</h3>
<div class="inputdata">
	<br/>
	<form action="/calendar/edit/{{ $tasks->id }}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    <div class="form-group">
      <label for="name">Nama Kegiatan</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Berenang" aria-describedby="Bantuan" required="required" value="{{ $tasks->name}}">
      <small id="Bantuan" class="form-text text-muted">Masukkan kegiatan yang akan dijadwalkan</small>
    </div>
    <div class="form-group">
      <label for="description">Deskripsi Kegiatan</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="123" aria-describedby="Bantuan" required="required" value="{{ $tasks->description}}">
      <small id="Bantuan" class="form-text text-muted">Masukkan Deskripsi Kegiatan</small>
    </div>
    <div class="form-group">
      <label for="task_date">Waktu Dimulai</label>
      <input type="text" class="form-control date" id="task_date" name="task_date" placeholder="123" aria-describedby="Bantuan" required="required" value="{{ $tasks->task_date}}">
      <small id="Bantuan" class="form-text text-muted">Masukkan waktu kegiatan</small>
    </div>
    <button type="submit" class="btn btn-primary">
      <span class="spinner-grow spinner-grow-sm"></span>
      Submit
    </button>
  </form>
  <br/>
  <a href="/calendar"> Kembali</a>
</div>
</div>



@endsection
