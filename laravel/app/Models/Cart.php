<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";

    public function users()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function boardgames()
    {
        return $this->hasOne(Boardgame::class,'id','boardgame_id');
    }



}
