<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Departemen;

class DepartemenController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
      public function datadepartemen(){
      $departement = Departemen::all();
      return view('datadepartemen', ['departement' => $departement]);
    }
    public function userdatadepartemen(){
      $departement = Departemen::all();
      return view('userdatadepartemen', ['departement' => $departement]);
    }
    public function tambahdatadepartemen(){
      return view('tambahdatadepartemen');
    }
    public function tambah(Request $request){

      Departemen::create([
        'nama_departemen' => $request->nama_departemen,
        'kepala_departemen' => $request->kepala_departemen,
        'nim' => $request->nim
      ]);
      return redirect('/data/departemen');
    }
    public function editdatadepartemen($id_departemen){
      $departement = Departemen::find($id_departemen);
      return view('editdatadepartemen', ['departement' => $departement]);
    }
    public function edit($id_departemen, Request $request){
      $departement = Departemen::find($id_departemen);
      $departement->id_departemen = $request->id_departemen;
      $departement->nama_departemen = $request->nama_departemen;
      $departement->kepala_departemen = $request->kepala_departemen;
      $departement->nim = $request->nim;
      $departement->save();
      return redirect('/data/departemen');
    }
    public function delete($id_departemen){
      $departement = Departemen::find($id_departemen);
      $departement->delete();
      return redirect('/data/departemen');
    }
}
