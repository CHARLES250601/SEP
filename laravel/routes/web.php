<?php

use App\Http\Controllers\AdminControler;
use App\Http\Controllers\CustomerControler;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterControler;
use App\Models\Genre;
use App\Models\Boardgame;
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
    $boardgame_genres = Genre::all();
    return view('layout/main',[
        'boardgame_genres' => $boardgame_genres
    ]);
});

Route::get('/login',[LoginController::class,'login']);
Route::post('/dologin',[LoginController::class,'dologin'])->name('dologin');
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterControler::class,'register']);
Route::post('/doregister',[RegisterControler::class,'store'])->name('doregister');

Route::get('detail/{id}',[CustomerControler::class,'detail']);




Route::middleware(['web', 'CekRole:admin'])->group(function (){
    Route::get('/Crud',[AdminControler::class,'Index'])->name('index.Crud');
    Route::post('/Doinsert',[AdminControler::class,'Store'])->name('boardgame.store');
    Route::get('/Dodelete{id}',[AdminControler::class,'delete'])->name('boardgame.delete');
    //Route::get('/update{id}',[AdminControler::class,'update'])->name('boardgame.update');
    //Route::post('/Doupdate{id}',[AdminControler::class,'doupdate'])->name('boardgame.doupdate');
});


Route::middleware(['web', 'CekRole:customer'])->group(function (){
    Route::get('/Dashboard',[CustomerControler::class,'Home'])->name('index.customer');
    Route::get('/Cart',[CustomerControler::class,'cart'])->name('index.cart');
    Route::post('/DoAdd/{id}',[CustomerControler::class,'addcart'])->name('Add.cart');
});


