@extends('master')

@section('judul_halaman', )


@section('konten')
<div class="inputdataa justify-content-center">

<h3>Update Data Angkatan</h3>
<div class="inputdata">
	<br/>


	<form id="formmm" action="/data/angkatan/edit/{{ $angkatan->id_angkatan }}" method="post">

		{{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="tahun_angkatan">Tahun Angkatan</label>
      <input type="text" class="form-control" id="tahun_angkatan" name="tahun_angkatan" placeholder="Ex : 2013" required="required"  value="{{ $angkatan->tahun_angkatan }}">
    </div>
    <div class="form-group">
      <label for="jumlah_angkatan">Jumlah Angkatan</label>
      <input type="text" class="form-control" id="jumlah_angkatan" name="jumlah_angkatan" placeholder="Ibnu Mas'ud" required="required" value="{{ $angkatan->jumlah_angkatan }}">
    </div>
    <button type="submit" class="btn btn-primary">
      <span class="spinner-grow spinner-grow-sm"></span>
      Submit
    </button>
	</form>
  <br/>
  <a href="/data/angkatan"> Kembali</a>
</div>
</div>




@endsection
