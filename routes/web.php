<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/todo',[TodoController::class, 'index']);
Route::post('/todo/add',[TodoController::class,'create']);
Route::get('/todo/add',[TodoController::class,'add']);

Route::get('/todo/edit/{id}',[TodoController::class,'edit']);
Route::post('/todo/edit/{id}',[TodoController::class,'update']);

Route::get('/todo/delete/{id}',[TodoController::class,'delete']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
