@extends('master')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-12">

        <h3 align-text="center" style="font-size: 40px; color: dodgerblue">DATA PROGRAM STUDI</h3>
      </div>

   </div>
     </div>
   </div>
<div class="table-mahasiswa">

      <form action="/data/prodi/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari ID . . . " value="{{ old('cari') }}">
        <input class="btn btn btn-info  ml-3" type="submit" value="CARI">
      </form>
      <br/>

      <table class ="table table-striped" border="1" >
        <tr>
          <th>ID Program Studi</th>
          <th>Nama Program Studi</th>
          <th>Jumlah Mahasiswa</th>
          <th>Jumlah Dosen</th>
          <th>Opsi</th>
        </tr>
        @foreach($prodi as $p)
        <tr>
          <td>{{ $p->id_program_studi }}</td>
          <td>{{ $p->nama_prodi }}</td>
          <td>{{ $p->jumlah_mhs }}</td>
          <td>{{ $p->jumlah_dosen }}</td>
          <td>
            <a class="btn btn-warning btn-sm" href="/data/prodi/edit/{{ $p->id_program_studi }}">Edit</a>
            |
            <a class="btn btn-danger btn-sm" href="/data/prodi/hapus/{{ $p->id_program_studi }}">Hapus</a>
          </td>
          </tr>
        @endforeach

      </table>
      <a class="btn btn-primary" href="/data/prodi/tambah"> + Data Program Studi Baru</a>
      <br/>
      <br/>
      <br/>
      <br/>

      </div>















@endsection
