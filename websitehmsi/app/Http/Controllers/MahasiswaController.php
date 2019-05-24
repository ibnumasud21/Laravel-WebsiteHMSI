<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
    public function datamahasiswa(){
      $mahasiswa = DB::table('mahasiswa')->paginate(10);
      return view('datamahasiswa',['mahasiswa' => $mahasiswa]);
    }
    public function userdatamahasiswa(){
      $mahasiswa = DB::table('mahasiswa')->paginate(10);
      return view('userdatamahasiswa',['mahasiswa' => $mahasiswa]);
    }
    public function tambahdatamahasiswa(){
      return view('tambahdatamahasiswa');
    }
    public function tambah(Request $request){
      DB::table('mahasiswa')->insert([
        'nim' => $request->nim,
        'nama_mahasiswa' => $request->nama,
        'id_program_studi' => $request->prodi,
        'jenis_kelamin' => $request->jenkel,
        'keanggotaan' => $request->keanggotaan,
        'id_angkatan' => $request->angkatan
      ]);
      return redirect('/data/mahasiswa');
    }
    public function editdatamahasiswa($nim){
      $mahasiswa = Mahasiswa::find($nim);
      return view('editdatamahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function edit($nim, Request $request){
      $mahasiswa = Mahasiswa::find($nim);
      $mahasiswa->nama_mahasiswa = $request->nama_mahasiswa;
      $mahasiswa->id_program_studi = $request->id_program_studi;
      $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
      $mahasiswa->keanggotaan = $request->keanggotaan;
      $mahasiswa->id_angkatan = $request->id_angkatan;
      $mahasiswa->save();
      return redirect('/data/mahasiswa');
    }
    public function hapus($nim){
      DB::table('mahasiswa')->where('nim',$nim)->delete();
      return redirect ('/data/mahasiswa');
    }
    public function cari(Request $request){
      $cari = $request->cari;
      $mahasiswa = DB::table('mahasiswa')
      ->where('nama_mahasiswa','like',"%".$cari."%")
      ->paginate();
      return view('datamahasiswa',['mahasiswa' => $mahasiswa]);
    }
    public function carii(Request $request){
      $cari = $request->cari;
      $mahasiswa = DB::table('mahasiswa')
      ->where('nama_mahasiswa','like',"%".$cari."%")
      ->paginate();
      return view('userdatamahasiswa',['mahasiswa' => $mahasiswa]);
    }


}
