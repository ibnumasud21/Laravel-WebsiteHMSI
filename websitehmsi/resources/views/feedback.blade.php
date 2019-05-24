@extends('master')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-12">

        <h3 align-text="center" style="font-size: 40px; color: dodgerblue">FEEDBACK</h3>
      </div>

   </div>
     </div>
   </div>
<div class="table-mahasiswa">
<br/>
      <form action="/feedback/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Nama Departemen ... " value="{{ old('cari') }}">
        <input class="btn btn btn-info  ml-3" type="submit" value="CARI">
      </form>
      <br/>

      <table class ="table table-striped table-hover " border="1" >
        <thead>
        <tr>
          <th>Nomor</th>
          <th>Nama Pengirim</th>
          <th>Email Pengirim</th>
          <th>Subjek</th>
          <th>Pesan dan Saran</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contactus as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->name }}</td>
          <td>{{ $p->email }}</td>
          <td>{{ $p->subjek }}</td>
          <td>{{ $p->message }}</td>
          <td>
            <a class="btn btn-danger btn-sm" href="/feedback/hapus/{{ $p->id }}">Hapus</a>
          </td>
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
