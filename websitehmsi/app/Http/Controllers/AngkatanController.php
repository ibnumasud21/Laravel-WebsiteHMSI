<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Angkatan;
class AngkatanController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function dataangkatan(){
    $angkatan = Angkatan::all();
    return view('dataangkatan', ['angkatan' => $angkatan]);
  }
  public function userdataangkatan(){
    $angkatan = Angkatan::all();
    return view('userdataangkatan', ['angkatan' => $angkatan]);
  }
  public function tambahdataangkatan(){
    return view('tambahdataangkatan');
  }
  public function tambah(Request $request){

    Angkatan::create([
      'tahun_angkatan' => $request->tahun_angkatan,
      'jumlah_angkatan' => $request->jumlah_angkatan
    ]);
    return redirect('/data/angkatan');
  }
  public function editdataangkatan($id_angkatan){
    $angkatan = Angkatan::find($id_angkatan);
    return view('editdataangkatan', ['angkatan' => $angkatan]);
  }
  public function edit($id_angkatan, Request $request){
    $angkatan = Angkatan::find($id_angkatan);
    $angkatan->tahun_angkatan = $request->tahun_angkatan;
    $angkatan->jumlah_angkatan = $request->jumlah_angkatan;
    $angkatan->save();
    return redirect('/data/angkatan');
  }
  public function delete($id_angkatan){
    $angkatan = Angkatan::find($id_angkatan);
    $angkatan->delete();
    return redirect('/data/angkatan');
  }
}
