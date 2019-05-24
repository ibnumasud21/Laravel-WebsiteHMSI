<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{

    public function home(){
      return view('home');
    }
    public function profile(){
      return view('profile');
    }
    public function calendar(){
      return view('calendar');
    }
    public function about(){
      return view('about');
    }
    public function news(){
      return view('news');
    }

    public function feedback(){
      $contactus = DB::table('contactus')->paginate(10);
      return view('feedback',['contactus' => $contactus]);
    }
    public function hapus($id){
      DB::table('contactus')->where('id',$id)->delete();
      return redirect ('/feedback');
    }
    public function userfeedback(){
      return view('userfeedback');
    }
    public function tambah(Request $request){
      DB::table('contactus')->insert([
        'id' => $request->id,
        'name' => $request->name,
        'email' => $request->email,
        'subjek' => $request->subjek,
        'message' => $request->message
      ]);
      return redirect('/feedback/tambah');
    }

}
