<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControler extends Controller
{
    public function Index()
    {
        return view('admin.admin');
    }

    public function Crud()
    {
        return view('admin.curd');
    }
}
