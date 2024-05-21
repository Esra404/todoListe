<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/test",function (){
    return view("panel.layout.app");
});

Route::get("panel/tasks/create",[TaskController::class,"createPage"])->name("panel/CreateTaskPage");
Route::post("/panel/tasks/add",[TaskController::class,"addTask"])->name("panel.addTask");


