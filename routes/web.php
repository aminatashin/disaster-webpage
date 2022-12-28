<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\disasterController;
use App\Models\disasterModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [disasterController::class,'index']);
Route::get('disaster/static1',function(){
return view('static1');
});
Route::get('disaster/static2',function(){
    return view('static2');
    });
Route::get('/disaster/create',[disasterController::class,'create'])->middleware('auth');
Route::post('/disaster',[disasterController::class,'store'])->middleware('auth');
Route::get('/disaster/{listing}/edit',[disasterController::class,'update'])->middleware('auth');
Route::put('/disaster/{listing}',[disasterController::class,'edit'])->middleware('auth');
Route::delete('/disaster/{listing}',[disasterController::class,'destroy'])->middleware('auth');
Route::get('/disaster/manage',[disasterController::class,'manage'])->middleware('auth');
Route::get("/disaster/{listing}",[disasterController::class,'show']);
///////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/register',[userController::class,'register'])->middleware('guest');
Route::post('/users',[userController::class,'signup']);
Route::post('/logout',[userController::class, 'logout'])->middleware('auth');
Route::get('/login',[userController::class,'login'])->name('login')->middleware('guest');
Route::post('/users/login',[userController::class,'userlogin']);


