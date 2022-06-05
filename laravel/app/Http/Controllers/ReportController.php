<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order_Detail;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $reports = Checkout::all();

        return view('admin.report',[
            'reports' => $reports
        ]);
    }

    public function reportbarang(Request $request)
    {
        $reports = Order_Detail::select('detail.*',\DB::raw('(SUM(detail.qty)) as qty_sold'))->groupBy('boardgame_id')->get();
        return view('admin.reportbarang',[
            'reports'=> $reports
        ]);
    }

    public function reportuser(Request $request)
    {
        $reports = Checkout::select('checkout.*',\DB::raw('(SUM(checkout.grand_total)) as qty_sold'))->groupBy('user_id')->get();
        return view('admin.reportuser',[
            'reports' =>$reports
        ]);
    }


}
