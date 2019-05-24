<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prestasi;

class PrestasiController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function dataprestasi(){
    $prestasi = Prestasi::all();
    return view('dataprestasi', ['prestasi' => $prestasi]);
  }
  public function userdataprestasi(){
    $prestasi = Prestasi::all();
    return view('userdataprestasi', ['prestasi' => $prestasi]);
  }
  public function tambahdataprestasi(){
    return view('tambahdataprestasi');
  }
  public function tambah(Request $request){

    Prestasi::create([
      'id_prestasi' => $request->id_prestasi,
      'judul' => $request->judul,
      'nim' => $request->nim,
      'tahun_prestasi' => $request->tahun_prestasi

    ]);
    return redirect('/data/prestasi');
  }
  public function editdataprestasi($id_prestasi){
    $prestasi = Prestasi::find($id_prestasi);
    return view('editdataprestasi', ['prestasi' => $prestasi]);
  }
  public function edit($id_prestasi, Request $request){
    $prestasi = Prestasi::find($id_prestasi);
    $prestasi->id_prestasi = $request->id_prestasi;
    $prestasi->judul = $request->judul;
    $prestasi->nim = $request->nim;
    $prestasi->tahun_prestasi = $request->tahun_prestasi;
    $prestasi->save();
    return redirect('/data/prestasi');
  }
  public function delete($id_prestasi){
      $prestasi = Prestasi::find($id_prestasi);
      $prestasi->delete();
      return redirect('/data/prestasi');
  }
}
