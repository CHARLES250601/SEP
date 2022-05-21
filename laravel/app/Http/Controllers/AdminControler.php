<?php

namespace App\Http\Controllers;

use App\Models\Boardgame;
use App\Models\Genre;
use BoardgameGenre;
use Illuminate\Http\Request;

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
        return view('admin.update',[
            'boardgame_genres' => $boardgame_genres,
            'boardgames' => $boardgames,
        ]);

    }


    public function doupdate(Request $request,$id)
    {
        $data = Boardgame::where('id',$id)->first();
        $data->boardgame_nama = $request->boardgame_nama;
        $data->boardgame_harga_beli = $request->boardgame_harga_beli;
        $data->boardgame_harga_jual = $request->boardgame_harga_jual;
        $data->boardgame_stok = $request->boardgame_stok;
        $data->boardgame_gambar = $request->boardgame_gambar;
        $data->boardgame_genre = $request->boardgame_genre;
        $data->boardgame_deskripsi = $request->boardgame_deskripsi;

        $data->save();
        return redirect('/Admin')->with('succes','berhasil mengubah data');

    }

    public function delete($id)
    {
        $updatedata = Boardgame::where('id',$id)->delete();
        return redirect('/Admin')->with('succes','berhasil menghapus Boardgame');

    }


}
