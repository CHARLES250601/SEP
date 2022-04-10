<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rating extends Model
{
    use HasFactory;
    protected $table = "rating";

    public function users()
    {
        return $this->belongsTo(User::class,'user_id'.'id');
    }

    public function boardgames()
    {
        return $this->belongsTo(Boardgame::class,'boardgame_id','id');
    }

    public function ratings()
    {
        return $this->hasOne(Boardgame::class,'boardgame_id','id');
    }






}
