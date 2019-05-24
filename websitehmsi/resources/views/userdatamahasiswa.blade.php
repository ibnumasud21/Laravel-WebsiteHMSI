@extends('usermaster')

@section('judul_halaman')


@section('konten')
<div class="body-1">
  <div class="jumbotron text-black home" style="background-color:ghostwhite">
    <div class="row">
      <div class="col-lg-12">

        <h3 align-text="center" style="font-size: 40px; color: dodgerblue">DATA MAHASISWA</h3>
      </div>

   </div>
     </div>
   </div>
<div class="table-mahasiswa">

      <form action="/data/mahasiswa/user/carii" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Mahasiswa . . . " value="{{ old('cari') }}">
        <input class="btn btn btn-info  ml-3" type="submit" value="CARI">
      </form>
      <br/>

      <table class ="table table-striped" border="1" >
        <tr>
          <th>NIM</th>
          <th>Nama Mahasiswa</th>
          <th>Program Studi</th>
          <th>Jenis Kelamin</th>
          <th>Keanggotaan</th>
          <th>Angkatan</th>
        </tr>
        @foreach($mahasiswa as $p)
        <tr>
          <td>{{ $p->nim }}</td>
          <td>{{ $p->nama_mahasiswa }}</td>
          <td>{{ $p->id_program_studi }}</td>
          <td>{{ $p->jenis_kelamin }}</td>
          <td>{{ $p->keanggotaan }}</td>
          <td>{{ $p->id_angkatan }}</td>
          </tr>
        @endforeach

      </table>
      <a>Note : Untuk data Program Studi dan Angkatan dapat dilihat pada Data Program Studi dan Data Angkatan pada Menu Data</a>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      Halaman : {{ $mahasiswa->currentPage() }} <br/>
      Data Per Halaman : {{ $mahasiswa->perPage() }} <br/>
      <br/>

      {{ $mahasiswa->links() }}

      </div>















@endsection
