<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class RegisterControler extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
    
        $validated = $request->validate([

            'username' => ['required','min:5','max:255','unique:customers'],
            'password' => 'required|min:5|max:8',
            'email'    => 'required|email:dns|unique:customers',
            'alamat'   => 'required|max:255'    
        ]);

    
    }

}
