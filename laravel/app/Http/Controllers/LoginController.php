<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view ('login');
    }


    public function dologin (Request $request)
    {
        $credential = [
            "email" => $request->email,
            "password" => $request->password
        ];
        if(Auth::attempt($credential))
        {
            if(Auth::user()->role == "customer")
            {

                return redirect()->route('index.customer');
            }
            else
            {

                return redirect()->route('index.Admin');
            }
        }
        else
        {
            return redirect('/login')->with(['pesan'=>'Gagal Login']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
