<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prodi;

class ProdiController extends Controller
{
  public function dataprodi(){
    $prodi = Prodi::all();
    return view('dataprodi', ['prodi' => $prodi]);
  }
  public function userdataprodi(){
    $prodi = Prodi::all();
    return view('userdataprodi', ['prodi' => $prodi]);
  }
  public function tambahdataprodi(){
    return view('tambahdataprodi');
  }
  public function tambah(Request $request){

      Prodi::create([
      'id_program_studi' => $request->id_program_studi,
      'nama_prodi' => $request->nama_prodi,
      'jumlah_mhs' => $request->jumlah_mhs,
      'jumlah_dosen' => $request->jumlah_dosen
    ]);
    return redirect('/data/prodi');
  }
  public function editdatadosen($id_program_studi){
    $prodi = Prodi::find($id_program_studi);
    return view('editdataprodi', ['prodi' => $prodi]);
  }
  public function edit($id_program_studi, Request $request){
    $prodi = Prodi::find($id_program_studi);
    $prodi->id_program_studi = $request->id_program_studi;
    $prodi->nama_prodi = $request->nama_prodi;
    $prodi->jumlah_mhs = $request->jumlah_mhs;
    $prodi->jumlah_dosen = $request->jumlah_dosen;
    $prodi->save();
    return redirect('/data/prodi');
  }
  public function delete($id_program_studi){
      $prodi = Prodi::find($id_program_studi);
      $prodi->delete();
      return redirect('/data/prodi');
  }
}
