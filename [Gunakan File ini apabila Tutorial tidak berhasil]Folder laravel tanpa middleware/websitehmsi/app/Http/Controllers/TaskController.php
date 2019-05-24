<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function calendar(){
      $tasks = Task::all();
        return view('calendar', ['tasks' => $tasks]);
      }
      public function usercalendar(){
        $tasks = Task::all();
          return view('usercalendar', ['tasks' => $tasks]);
        }
      public function tambahcalendar(){
        return view('tambahcalendar');
      }
      public function tambah(Request $request){

        Task::create($request->all());
        return redirect('/calendar');
      }
      public function editcalendar($id){
        $tasks = Task::find($id);
        return view('editcalendar', ['tasks' => $tasks]);
      }
      public function edit($id, Request $request){
        $tasks = Task::find($id);
        $tasks->id = $request->id;
        $tasks->name = $request->name;
        $tasks->description = $request->description;
        $tasks->task_date = $request->task_date;
        $tasks->save();
        return redirect('/calendar');
      }

    }
