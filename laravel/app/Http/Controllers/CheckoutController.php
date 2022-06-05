<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function docheckout(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = \Auth::user()->id;
        $savedata = Checkout::create($data);

        $total = 0;
        foreach (\Auth::user()->carts as $key => $value) {
            $detail = new Order_Detail();
            $detail->checkout_id = $savedata->id;
            $detail->boardgame_id = $value->boardgame_id;
            $detail->sell_price = $value->boardgames->boardgame_harga_jual;
            $detail->purchase_price = $value->boardgames->boardgame_harga_beli;
            $detail->qty = $value->qty;
            $detail->total = $value->boardgames->boardgame_harga_jual *  $value->qty;
            $detail->save();
            $total += $detail->total;

            $cart = Cart::where('id',$value->id)->delete();//blank the fill
        }

        $savedata->grand_total = $total;
        $savedata->save();

        return redirect('/');
    }


}
