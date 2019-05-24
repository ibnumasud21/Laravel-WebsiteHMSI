@extends('usermaster')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-12">

        <h3 align-text="center" style="font-size: 40px; color: dodgerblue">DATA DEPARTEMEN</h3>
      </div>

   </div>
     </div>
   </div>
<div class="table-mahasiswa">

      <form action="/data/departemen/user/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Nama Departemen ... " value="{{ old('cari') }}">
        <input class="btn btn btn-info  ml-3" type="submit" value="CARI">
      </form>
      <br/>

      <table class ="table table-striped " border="1" >
        <thead>
        <tr>
          <th>ID Departemen</th>
          <th>Nama Departemen</th>
          <th>Kepala Departemen</th>
          <th>NIM</th>
        </tr>
      </thead>
      <tbody>
        @foreach($departement as $p)
        <tr>
          <td>{{ $p->id_departemen }}</td>
          <td>{{ $p->nama_departemen }}</td>
          <td>{{ $p->kepala_departemen }}</td>
          <td>{{ $p->nim }}</td>
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
