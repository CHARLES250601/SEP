<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControler extends Controller
{
    public function Home()
    {
        return view('layout.admin.admin');
    }
}