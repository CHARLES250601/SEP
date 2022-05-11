<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Boardgame;
use Illuminate\Http\Request;

class CustomerControler extends Controller
{
    public function Home(Request $request)
    {
        $boardgame_genres = Genre::all();
        return view('layout/main',['boardgame_genres' => $boardgame_genres]);
    }

    public function detail(Request $request,$id)
    {
        $Boardgame = Boardgame::find($id);
        return view('detail',['Boardgame' => $Boardgame]);
    }

}
