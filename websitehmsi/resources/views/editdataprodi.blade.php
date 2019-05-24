@extends('master')

@section('judul_halaman', )


@section('konten')
<div class="inputdataa justify-content-center">

<h3>Update Data Dosen</h3>
<div class="inputdata">
	<br/>


	<form action="/data/prodi/edit/{{ $prodi->id_program_studi }}" method="post">

		{{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="nama_prodi">Nama Program Studi</label>
      <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Sistem Informasi" required="required" value="{{ $prodi->nama_prodi }}">
    </div>
    <div class="form-group">
      <label for="jumlah_mhs">Jumlah Mahasiswa</label>
      <input type="number" class="form-control" id="jumlah_mhs" name="jumlah_mhs" placeholder="Masukkan jumlah mahasiswa" required="required" value="{{ $prodi->jumlah_mhs }}">
    </div>
    <div class="form-group">
      <label for="jumlah_dosen">Jumlah Dosen</label>
      <input type="number" class="form-control" id="jumlah_dosen" name="jumlah_dosen" placeholder="Masukkan jumlah dosen" required="required" value="{{ $prodi->jumlah_dosen }}">
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
