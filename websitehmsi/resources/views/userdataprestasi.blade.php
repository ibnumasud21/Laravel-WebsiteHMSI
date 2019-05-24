@extends('usermaster')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-12">

        <h3 align-text="center" style="font-size: 40px; color: dodgerblue">DATA PRESTASI</h3>
      </div>

   </div>
     </div>
   </div>
<div class="table-mahasiswa">
<br/>
      <form action="/data/prestasi/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Judul Prestasi ... " value="{{ old('cari') }}">
        <input class="btn btn btn-info  ml-3" type="submit" value="CARI">
      </form>
      <br/>

      <table class ="table table-striped " border="1" >
        <thead>
        <tr>
          <th>ID Prestasi</th>
          <th>Judul Prestasi</th>
          <th>NIM</th>
          <th>Tahun Prestasi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($prestasi as $p)
        <tr>
          <td>{{ $p->id_prestasi }}</td>
          <td>{{ $p->judul }}</td>
          <td>{{ $p->nim }}</td>
          <td>{{ $p->tahun_prestasi }}</td>

          </tr>
        @endforeach
        </tbody>
      </table>
      <br/>
      <br/>
      <br/>
      <br/>


      </div>
      @endsection
