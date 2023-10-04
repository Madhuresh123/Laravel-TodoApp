<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\TodoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function(){

    Route::get('/todos', [TodoController ::class, 'todos'])->name('todo.index'); 
    Route::get('/todos/create', [TodoController ::class, 'create']); 
    Route::post('/todos/create', [TodoController ::class, 'store']); 
    Route::get('/todos/edit/{todo}', [TodoController ::class, 'edit'])->name('todo.edit'); 
    Route::patch('/todos/update/{todo}', [TodoController ::class, 'update'])->name('todo.update'); 
    Route::delete('/todos/delete/{todo}', [TodoController ::class, 'delete'])->name('todo.delete'); 

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [Usercontroller::class, 'index']); 

Route::post('/upload',function(){
    dd(request()->all());
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

