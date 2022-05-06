<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class CustomerControler extends Controller
{
    public function Home(Request $request)
    {
        $boardgame_genres = Genre::all();
        return view('layout/main',[
            'boardgame_genres' => $boardgame_genres
        ]);
    }

}
