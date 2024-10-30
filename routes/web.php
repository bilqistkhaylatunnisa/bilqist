<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.dashboard');
});

route::get('/user',[UserController::class,'index']);
route::get('/user/tambah',[UserController::class,'create']);
route::post('/user/simpan',[UserController::class,'store']);
route::get('/user/{id}/show',[UserController::class,'show']);
route::post('/user/{id}/update',[UserController::class,'update']);
route::get('/user/{id}/delete',[UserController::class,'destroy']);