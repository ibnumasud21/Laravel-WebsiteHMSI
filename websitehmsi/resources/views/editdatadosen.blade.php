@extends('master')

@section('judul_halaman', )


@section('konten')
<div class="inputdataa justify-content-center">

<h3>Update Data Dosen</h3>
<div class="inputdata">
	<br/>


	<form action="/data/dosen/edit/{{ $dosen->id_dosen }}" method="post">

		{{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="id_dosen">NIDN</label>
      <input type="number" class="form-control" id="id_dosen" name="id_dosen" placeholder="Pengembangan Sumber Daya Mahasiswa" required="required"  value="{{ $dosen->id_dosen }}">
    </div>
    <div class="form-group">
      <label for="nama_dosen">Nama Dosen</label>
      <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Ibnu Mas'ud" required="required" value="{{ $dosen->nama_dosen }}">
    </div>
    <div class="form-group">
      <label for="id_program_studi">ID Program Studi</label>
      <input type="number" class="form-control" id="id_program_studi" name="id_program_studi" placeholder="1 - 10" required="required" value="{{ $dosen->id_program_studi }}">
    </div>
    <button type="submit" class="btn btn-primary">
      <span class="spinner-grow spinner-grow-sm"></span>
      Submit
    </button>
	</form>
  <br/>
  <a href="/data/dosen"> Kembali</a>
</div>
</div>




@endsection
