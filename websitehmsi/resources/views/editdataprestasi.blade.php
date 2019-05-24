@extends('master')

@section('judul_halaman', )


@section('konten')
<div class="inputdataa justify-content-center">

<h3>Update Data Prestasi</h3>
<div class="inputdata">
	<br/>


	<form action="/data/prestasi/edit/{{ $prestasi->id_prestasi }}" method="post">

		{{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="judul">Judul Prestasi</label>
      <input type="text" class="form-control" id="judul" name="judul" placeholder="Lomba Makan Kerupuk" required="required" value="{{ $prestasi->judul }}">
    </div>
    <div class="form-group">
      <label for="nim">NIM</label>
      <input type="number" class="form-control" id="nim" name="nim" placeholder="10xx10xx" required="required" value="{{ $prestasi->nim }}">
    </div>
    <div class="form-group">
      <label for="tahun_prestasi">Tahun Prestasi</label>
      <input type="number" class="form-control" id="tahun_prestasi" name="tahun_prestasi" placeholder="Ex : 2016" required="required" value="{{ $prestasi->tahun_prestasi }}">
    </div>
    <button type="submit" class="btn btn-primary">
      <span class="spinner-grow spinner-grow-sm"></span>
      Submit
    </button>
	</form>
  <br/>
  <a href="/data/prestasi"> Kembali</a>
</div>
</div>




@endsection
