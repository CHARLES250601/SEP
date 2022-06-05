<?php

namespace App\Http\Controllers;

use App\Models\Boardgame;
use App\Models\Genre;
use App\Models\User;
use BoardgameGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminControler extends Controller
{
    public function Index(Request $request)
    {
        $boardgame_genres = Genre::all();
        $boardgames = Boardgame::orderBy('id','asc')->leftJoin('boardgame_genre as bg','bg.id','=','boardgame.boardgame_genre')->select('boardgame.*','bg.nama_genre')->get();
        return view('admin.admin',[
            'boardgame_genres' => $boardgame_genres,
            'boardgames' => $boardgames,
        ]);

    }

    public function Store(Request $request)
    {
       if($request->has('btnTambah'))
       {
            $data = $request->all();
            $name = date('dmYHis').'.jpg';
            $data['boardgame_gambar'] = 'images/Boardgame/'.date('d-m-Y').'/'.$name;
            $savedata = Boardgame::create($data);

            if($savedata){
                $request->file('boardgame_gambar')->storeAs('images/Boardgame/'.date('d-m-Y'),$name,'public');
                return redirect('/Admin')->with('succes','berhasil menambahkan Boardgame');
            }
            else
            {
                return redirect('/Admin')->with('err','gagal menambahkan Boardgame');
            }
       }
       else
       {
           return redirect('/Admin')->with(['pesan'=>'Gagal Proses Bos!']);
       }
   }


    public function Add()
    {
        $boardgame_genres = Genre::all();
        $boardgames = Boardgame::orderBy('id','asc')->leftJoin('boardgame_genre as bg','bg.id','=','boardgame.boardgame_genre')->select('boardgame.*','bg.nama_genre')->get();
        return view('admin.curd',[
            'boardgame_genres' => $boardgame_genres,
            'boardgames' => $boardgames,
        ]);
    }

    public function update(Request $request,$id)
    {
        $boardgame_genres = Genre::all();
        $boardgames = Boardgame::where('id',$id)->first();
        return view('admin.updateuser',[
            'boardgame_genres' => $boardgame_genres,
            'boardgames' => $boardgames,
        ]);

    }


    public function doupdate(Request $request,$id)
    {
        $data = Boardgame::where('id',$id)->first();
        $name = date('dmYHis').'.jpg';
        $data->boardgame_gambar = 'images/Boardgame/'.date('d-m-Y').'/'.$name;
        $data->boardgame_nama = $request->boardgame_nama;
        $data->boardgame_harga_beli = $request->boardgame_harga_beli;
        $data->boardgame_harga_jual = $request->boardgame_harga_jual;
        $data->boardgame_stok = $request->boardgame_stok;
        $data->boardgame_genre = $request->boardgame_genre;
        $data->boardgame_deskripsi = $request->boardgame_deskripsi;

        $request->file('boardgame_gambar')->storeAs('images/Boardgame/'.date('d-m-Y'),$name,'public');
        $data->save();
        return redirect('/Admin')->with('succes','berhasil update Boardgame');


    }

    public function delete($id)
    {
        $updatedata = Boardgame::where('id',$id)->delete();
        return redirect('/Admin')->with('succes','berhasil menghapus Boardgame');

    }

    public function user(Request $request)
    {
        $users = User::where('role','!=','admin')->get();
        return view('admin.user',[
            'user' => $users,
        ]);
    }

    public function updateuser(Request $request,$id)
    {
        $users = User::where('id',$id)->first();
        return view('admin.usercurd',[
            'user' => $users,
        ]);

    }

    public function doupdateuser(Request $request,$id)
    {
        $savedata = User::where('id',$id)->first();
        $savedata->username    =  $request->username;
        $savedata->name        =  $request->name;
        $savedata->password    =  Hash::make($request->password);
        $savedata->email       =  $request->email;
        $savedata->alamat      =  $request->alamat;
        $savedata->save();
        return redirect('user')->with('succes','berhasil update User');
    }


    public function deleteusr($id)
    {
        $updateuser = User::where('id',$id)->delete();
        return redirect('user')->with('succes','berhasil menghapus User');
    }


}
