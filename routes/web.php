<?php

use App\Http\Controllers\disasterController;
use Illuminate\Support\Facades\Route;

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
Route::get('/disaster/create',[disasterController::class,'create']);
Route::post('/disaster',[disasterController::class,'store']);
Route::get('/disaster/{listing}/edit',[disasterController::class,'update']);
Route::put('/disaster/{listing}',[disasterController::class,'edit']);
Route::delete('/disaster/{listing}',[disasterController::class,'destroy']);
Route::get("/disaster/{listing}",[disasterController::class,'show']);

