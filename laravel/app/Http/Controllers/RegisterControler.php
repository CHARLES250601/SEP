<?php
namespace App\Http\Controllers;
use App\Models\User;
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

            'username' => ['required','min:5','max:255','unique:users'],
            'name'     => 'required|min:5|max:225',
            'password' => 'required|min:5|max:8',
            'email'    => 'required|email:dns|unique:users',
            'alamat'   => 'required|max:255'

        ];

        $validate = Validator::make($request->all(),$rules);
        if($validate->fails())
        {
            return redirect('/register')->withErrors($validate);

        }
        //dd(request()->all());

       $savedata = new User();
       $savedata->username    =  $request->username;
       $savedata->name        =  $request->name;
       $savedata->password    =  Hash::make($request->password);
       $savedata->email       =  $request->email;
       $savedata->alamat      =  $request->alamat;
       $savedata->save();

        return redirect('/login')->with('succes','berhasil menambahkan user');


    }

}
