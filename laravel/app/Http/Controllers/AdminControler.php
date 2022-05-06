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
        return view('admin.curd',[
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
                return redirect('/Crud')->with('succes','berhasil menambahkan Boardgame');
            }
            else
            {
                return redirect('/Crud')->with('err','gagal menambahkan Boardgame');
            }
       }
       elseif($request->has('btnUbah')){
        $Boardgame = Boardgame::find($request->id);
        if($Boardgame->update($request->all()))
        {
            return redirect('/Crud')->with('succes','berhasil update Boardgame');
        }
        else
        {
            return redirect('/Crud')->with(['pesan'=>'Gagal Proses Bos!']);
        }
    }
    }

/*
    public Function update($request,$id)
    {
        $boardgame_genres = Genre::all();
        $data = Boardgame::where('id',$id)->first();

        return view('admin.update',compact('data'));
    }

    public function doupdate( Request $request,$id)
    {
        $data = Boardgame::where('id',$id)->first();
        $data->Boardgame_nama = $request->boardgame_nama;
        $data->boardgame_harga_beli = $request->boardgame_harga_beli;
        $data->boardgame_harga_jual = $request->boardgame_harga_jual;
        $data->boardgame_stok   = $request->boardgame_stok;
        $data->boardgame_gambar = $request->boardgame_gambar;
        $data->boardgame_genre  = $request->boardgame_genre;
        $data->boardgame_deskripsi = $request->boardgame_deskripsi;
        $data->save();
        return redirect('/Crud')->with('succes','berhasil mengubah Boardgame');

    }
*/
    public function delete($id)
    {
        $updatedata = Boardgame::where('id',$id)->delete();
        return redirect('/Crud')->with('succes','berhasil menghapus Boardgame');

    }


}
