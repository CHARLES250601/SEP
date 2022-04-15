<?php

namespace App\Http\Controllers;

use App\Models\Boardgame;
use App\Models\Genre;
use BoardgameGenre;
use Illuminate\Http\Request;

class AdminControler extends Controller
{
    public function Index(Request $request)
    {
        $boardgame_genres = Genre::all();
        return view('admin.curd',[
            'boardgame_genres' => $boardgame_genres
        ]);
        
    }

    public function Store(Request $request)
    {
       $savedata = new Boardgame();
       $savedata->boardgame_nama       =  $request->boardgame_nama;
       $savedata->boardgame_harga_beli =  $request->boardgame_harga_beli;
       $savedata->boargame_harga_jual  =  $request->boardgame_harga_jual;
       $savedata->boardgame_stok       =  $request->boardgame_stok;
       $savedata->boardgame_gambar     =  $request->boardgame_gambar;
       $savedata->boardgame_genre      =  $request->boardgame_genre;
       $savedata->boardgame_deskripsi  =  $request->boardgame_deskripsi;
       $savedata->save();

       return redirect('/Crud')->with('succes','berhasil menambahkan Boardgame');
    }
}
