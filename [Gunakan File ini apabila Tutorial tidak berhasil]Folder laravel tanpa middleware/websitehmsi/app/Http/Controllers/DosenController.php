<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dosen;

class DosenController extends Controller
{
    public function datadosen(){
      $dosen = Dosen::all();
      return view('datadosen', ['dosen' => $dosen]);
    }
    public function userdatadosen(){
      $dosen = Dosen::all();
      return view('userdatadosen', ['dosen' => $dosen]);
    }
    public function tambahdatadosen(){
      return view('tambahdatadosen');
    }
    public function tambah(Request $request){

      Dosen::create([
        'id_dosen' => $request->id_dosen,
        'nama_dosen' => $request->nama_dosen,
        'id_program_studi' => $request->id_program_studi
      ]);
      return redirect('/data/dosen');
    }
    public function editdatadosen($id_dosen){
      $dosen = Dosen::find($id_dosen);
      return view('editdatadosen', ['dosen' => $dosen]);
    }
    public function edit($id_dosen, Request $request){
      $dosen = Dosen::find($id_dosen);
      $dosen->id_dosen = $request->id_dosen;
      $dosen->nama_dosen = $request->nama_dosen;
      $dosen->id_program_studi = $request->id_program_studi;
      $dosen->save();
      return redirect('/data/dosen');
    }
    public function delete($id_dosen){
        $dosen = Dosen::find($id_dosen);
        $dosen->delete();
        return redirect('/data/dosen');
    }
}
