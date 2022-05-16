<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    use HasFactory;
    protected $table  = "boardgame";
    public $timestamps = false;


    protected $fillable = [
        'boardgame_nama',
        'boardgame_harga_beli',
        'boardgame_harga_jual',
        'boardgame_stok',
        'boardgame_gambar',
        'boardgame_genre',
        'boardgame_deskripsi',
    ];


    public function ratings()
    {
        return $this->hasMany(Rating::class,'id','boardgame_id');
    }

    public function Invoices()
    {
        return $this->belongsTo(Invoice::class,'id','boardgame_id');
    }


    public function genres()
    {
        return $this->hasOne(Genre::class,'id','boardgame_genre');
    }

    public function products()
    {
        return $this->belongsTo(Genre::class,'boardgame_genre','id');
    }

    public function carts()
    {
        return $this->belongsTo(Cart::class,'id','boardgame_id');
    }
}
