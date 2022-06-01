<?php

use App\Http\Controllers\AdminControler;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerControler;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\ReportController;
use App\Models\Genre;
use App\Models\Boardgame;
use App\Models\User;
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
    Route::get('/Admin',[AdminControler::class,'Index'])->name('index.Admin');
    Route::get('/Add',[AdminControler::class,'Add'])->name('index.add');

    Route::get('/Update/{id}',[AdminControler::class,'update'])->name('index.update');
    Route::post('/Doinsert',[AdminControler::class,'Store'])->name('boardgame.store');
    Route::get('/Dodelete/{id}',[AdminControler::class,'delete'])->name('boardgame.delete');
    Route::post('/Dodupdate/{id}',[AdminControler::class,'doupdate'])->name('boardgame.update');

    Route::get('/user',[AdminControler::class,'user'])->name('index.user');
    Route::get('/Dodeleteuser/{id}',[AdminControler::class,'deleteusr'])->name('user.delete');
    Route::get('/updateuser/{id}',[AdminControler::class,'updateuser'])->name('user.update');
    Route::post('/Dodupdate/{id}',[AdminControler::class,'doupdateuser'])->name('user.doupdate');

    Route::get('report',[ReportController::class,'report'])->name('report.index');

});


Route::middleware(['web', 'CekRole:customer'])->group(function (){
    Route::get('/Dashboard',[CustomerControler::class,'Home'])->name('index.customer');
    Route::get('/Cart',[CustomerControler::class,'cart'])->name('index.cart');
    Route::post('/DoAdd/{id}',[CustomerControler::class,'addcart'])->name('Add.cart');
    Route::get('checkout',[CheckoutController::class,'checkout'])->name('index.checkout');
    Route::post('docheckout',[CheckoutController::class,'docheckout'])->name('customer.checkout');
});


