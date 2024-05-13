<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
public function createPage()
{
    return view("panel.tasks.create");
}
public function addTask(Request $req)
{
dd($req ->all());
}

    //
}

