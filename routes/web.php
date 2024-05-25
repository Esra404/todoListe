<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get("/test",function (){
    return view("panel.layout.app");
});

Route::get("panel/tasks/create",[TaskController::class,"createPage"])->name("panel/CreateTaskPage");
Route::post("/panel/tasks/add",[TaskController::class,"addTask"])->name("panel.addTask");
Route::get("panel/tasks/index",[TaskController::class,"indexPage"])->name("panel.indexTask");

//kategori route start

Route::get("panel/categories/index",[CategoryController::class,"index"])->name("panel.categoryIndex");

//kategori route end
//Route::get(("panel/categories/createPage"),[CategoryController::class,"createPage"])->name("panel.categoryCreate");
Route::get("panel/categories/createPage",[CategoryController::class,"createPage"])->name("panel.categoryCreate");
Route::post("panel/categories/addCtegory",[CategoryController::class,"postCategory"])->name("panel.categoryAdd");
Route::get("panel/categories/update/{id}",[CategoryController::class,"updatePage"])->name("panel.categoryUpdatePage");
Route::post("panel/categories/updatePost",[CategoryController::class,"updateCategory"])->name("panel.updateCategory");
Route::get("panel/categories/deleteCategory/{id}",[CategoryController::class,"Categorydelete"])->name("panel.categoryDelete");



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
