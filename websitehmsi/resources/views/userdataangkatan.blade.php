@extends('usermaster')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-12">

        <h3 align-text="center" style="font-size: 40px; color: dodgerblue">DATA ANGKATAN</h3>
      </div>

   </div>
     </div>
   </div>
<div class="table-mahasiswa">

      <form action="/data/angkatan/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Angkatan ... " value="{{ old('cari') }}">
        <input class="btn btn btn-info  ml-3" type="submit" value="CARI">
      </form>
      <br/>

      <table class ="table table-striped table-hover " border="1" >
        <thead>
        <tr>
          <th>ID Angkatan</th>
          <th>Tahun Angkatan</th>
          <th>Jumlah Angkatan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($angkatan as $p)
        <tr>
          <td>{{ $p->id_angkatan }}</td>
          <td>{{ $p->tahun_angkatan }}</td>
          <td>{{ $p->jumlah_angkatan }}</td>
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
