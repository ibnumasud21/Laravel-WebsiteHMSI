@extends('master')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-12">

        <h3 align-text="center" style="font-size: 40px; color: dodgerblue">DATA DOSEN</h3>
      </div>

   </div>
     </div>
   </div>
<div class="table-mahasiswa">
<br/>
      <form action="/data/dosen/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Nama Departemen ... " value="{{ old('cari') }}">
        <input class="btn btn btn-info  ml-3" type="submit" value="CARI">
      </form>
      <br/>

      <table class ="table table-striped table-hover " border="1" >
        <thead>
        <tr>
          <th>NIDN</th>
          <th>Nama Dosen</th>
          <th>ID Program Studi</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dosen as $p)
        <tr>
          <td>{{ $p->id_dosen }}</td>
          <td>{{ $p->nama_dosen }}</td>
          <td>{{ $p->id_program_studi }}</td>
          <td>
            <a class="btn btn-warning btn-sm" href="/data/dosen/edit/{{ $p->id_dosen }}">Edit</a>
            |
            <a class="btn btn-danger btn-sm" href="/data/dosen/hapus/{{ $p->id_dosen }}">Hapus</a>
          </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <a class="btn btn-primary" href="/data/dosen/tambah"> + Data Dosen Baru</a>
      <br/>
      <br/>
      <br/>
      <br/>


      </div>














@endsection
