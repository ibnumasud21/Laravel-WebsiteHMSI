@extends('master')

@section('judul_halaman', 'Data Mahasiswa')


@section('konten')


<div class="table-mahasiswa">
      <a href="/contact/mahasiswa/tambah"> + Data Mahasiswa Baru</a>
      <br/>
      <br/>

      <table class ="table table-striped" border="2" >
        <tr>
          <th>ID Mahasiswa</th>
          <th>Nama Mahasiswa</th>
          <th>NIM</th>
          <th>Program Studi</th>
          <th>Jenis Kelamin</th>
          <th>Keanggotaan</th>
          <th>Opsi</th>
        </tr>
        @foreach($mahasiswa as $p)
        <tr>
          <td>{{ $p->id_mahasiswa }}</td>
          <td>{{ $p->nama_mahasiswa }}</td>
          <td>{{ $p->nim }}</td>
          <td>{{ $p->id_program_studi }}</td>
          <td>{{ $p->jenis_kelamin }}</td>
          <td>{{ $p->keanggotaan }}</td>
          <td>
            <a href="/contact/mahasiswa/edit/{{ $p->id_mahasiswa}}">Edit</a>
            |
            <a href="/contact/mahasiswa/hapus/{{ $p->id_mahasiswa}}">Hapus</a>
          </td>
          </tr>
        @endforeach;

      </table>
      <table class="table1 table-striped" border = "1">
        <tr>
          <td>Email</td>
          <td>:</td>
          <td>ibnumasud11112@gmail.com</td>
        </tr>
        <tr>
        <td>Hp</td>
        <td>:</td>
        <td>-</td>
          </tr>

      </table>

      </div>

@endsection
