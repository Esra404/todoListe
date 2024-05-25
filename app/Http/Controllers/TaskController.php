<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tests\Feature\AuthenticationTest;

class TaskController extends Controller
{
public function createPage()
{
    $categories=Category::where("user_id",Auth::user()->id)->get();
    return view("panel/tasks/create",compact("categories"));
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
    $task->categori_id= $request->category_id;
    $task->title=$request->title;
    $task->content=$request->content;
    $task->status=$request->status;
    $task->deadline=$request->deadline;
    $task->save();

    return redirect()->route("panel.indexTask")->with(["succes","görev başarıyla oluşturuldu"]);

   // dd($request->all());
    //dd($task);

   // DB::table("tasks")->insert();
}


public function indexPage()
{
//$tasks=Task::get();
$user=Auth::user();

$tasks=$user->getTask;


//dd($tasks->getCategory->getUser);

return view("panel.tasks.index",compact("tasks"));
}
}

