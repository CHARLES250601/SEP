<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterControler extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
    
        $rules = [

            'customer_username' => ['required','min:5','max:255','unique:customers'],
            'customer_password' => 'required|min:5|max:8',
            'customer_email'    => 'required|email:dns|unique:customers',
            'customer_alamat'   => 'required|max:255'  

        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails())
        {
            return redirect('/register')->withErrors($validate);

        }
        
       $savedata = new Customer();
       $savedata->customer_username    =  $request->customer_username;
       $savedata->customer_password    =  Hash::make($request->password);
       $savedata->customer_email       = $request->customer_email;
       $savedata->customer_alamat      = $request->customer_alamat;
       $savedata->save();

        return redirect('/login')->with('succes','berhasil menambahkan user');
        
    
    }

}
