@extends('master')

@section('judul_halaman', )


@section('konten')
<div class="inputdataa justify-content-center">

<h3>Update Data Mahasiswa</h3>
<div class="inputdata">
	<br/>

	<form action="/data/mahasiswa/edit/{{ $mahasiswa->nim }}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    <div class="form-group">
      <label for="nama_mahasiswa">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Bambang Pamungkas" required="required"  value="{{ $mahasiswa->nama_mahasiswa }}">
    </div>
    <div class="form-group">
      <label for="id_program_studi">Program Studi</label>
      <input type="number" class="form-control" id="id_program_studi" name="id_program_studi" placeholder="Sistem Informasi" required="required" value="{{ $mahasiswa->id_program_studi }}">
    </div>
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="L / P" required="required" value="{{ $mahasiswa->jenis_kelamin }}">
    </div>
    <div class="form-group">
      <label for="keanggotaan">Keanggotaan</label>
      <input type="text" class="form-control" id="keanggotaan" name="keanggotaan" placeholder="Kepala PSDM" required="required" value="{{ $mahasiswa->keanggotaan }}">
    </div>
    <div class="form-group">
      <label for="id_angkatan">Angkatan</label>
      <input type="number" class="form-control" id="id_angkatan" name="id_angkatan" placeholder="20xx" required="required" value="{{ $mahasiswa->id_angkatan }}">
    </div>
    <button type="submit" class="btn btn-primary">
      <span class="spinner-grow spinner-grow-sm"></span>
      Submit
    </button>
	</form>
  <br/>
  <a href="/data/mahasiswa"> Kembali</a>
</div>
</div>



@endsection
