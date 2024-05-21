<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
public function createPage()
{
    return view("panel/tasks/create");
}
public function addTask(Request $request)
{
    // return "esra";
//dd($request ->all());
    //validasyon doğrulama
    $request->validate([
        //'title' => 'required|max:15|min:3'
         'title' => 'required|max:15|min:3',
         //   'content' => 'required|string',
          //  'status' => 'required|integer',
          //  'deadline' => 'nullable|date',
          //  'categori_id' => 'required|integer'//backend komutu
    ]);


    $task = new Task();
    $task->categori_id=1;
    $task->title=$request->title;
    $task->content=$request->content;
    $task->status=$request->status;
    $task->deadline=$request->deadline;
    $task->save();
    return "başarılı";

   // dd($request->all());
    //dd($task);

   // DB::table("tasks")->insert();
}    //
}

