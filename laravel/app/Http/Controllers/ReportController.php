<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
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


}
