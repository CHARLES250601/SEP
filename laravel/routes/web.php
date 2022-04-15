<?php

use App\Http\Controllers\AdminControler;
use App\Http\Controllers\CustomerControler;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterControler;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('layout/main');
});

Route::get('/login',[LoginController::class,'login']);
Route::post('/dologin',[LoginController::class,'dologin'])->name('dologin');
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterControler::class,'register']);
Route::post('/doregister',[RegisterControler::class,'store']);



Route::middleware(['web', 'CekRole:admin'])->group(function (){
    //Route::get('/IndexAdmin',[AdminControler::class,'Index'])->name('index.admin');
    Route::get('/Crud',[AdminControler::class,'Index'])->name('index.Crud');
    Route::post('/Doinsert',[AdminControler::class,'Store'])->name('boardgame.store');
});


Route::middleware(['web', 'CekRole:customer'])->group(function (){
    Route::get('/IndexCustomer',[CustomerControler::class,'Home'])->name('index.customer');
});


