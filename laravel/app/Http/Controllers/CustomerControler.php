<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Cart;
use App\Models\Boardgame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

    public function cart()
    {
        return view('cart');
    }

    public function addcart(Request $request,$id)
    {
        $cart = new Cart();
        $cart->user_id         = \Auth::user()->id;
        $cart->boardgame_id    = $id;
        $cart->qty             = $request['product-quatity'];
        $cart->save();

        return redirect('/Cart');

    }

}
