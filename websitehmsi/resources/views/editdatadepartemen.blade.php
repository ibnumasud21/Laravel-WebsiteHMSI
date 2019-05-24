@extends('master')

@section('judul_halaman', )


@section('konten')
<div class="inputdataa justify-content-center">

<h3>Update Data Departemen</h3>
<div class="inputdata">
	<br/>


	<form id="formmm"action="/data/departemen/edit/{{ $departement->id_departemen }}" method="post">

		{{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="nama_departemen">Nama Departemen</label>
      <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" placeholder="Pengembangan Sumber Daya Mahasiswa" required="required"  value="{{ $departement->nama_departemen }}">
    </div>
    <div class="form-group">
      <label for="kepala_departemen">Kepala Departemen</label>
      <input type="text" class="form-control" id="kepala_departemen" name="kepala_departemen" placeholder="Ibnu Mas'ud" required="required" value="{{ $departement->kepala_departemen }}">
    </div>
    <div class="form-group">
      <label for="nim">NIM</label>
      <input type="number" class="form-control" id="nim" name="nim" placeholder="L / P" required="required" value="{{ $departement->nim }}">
    </div>
    <button type="submit" class="btn btn-primary">
      <span class="spinner-grow spinner-grow-sm"></span>
      Submit
    </button>
	</form>
  <br/>
  <a href="/data/departemen"> Kembali</a>
</div>
</div>




@endsection
