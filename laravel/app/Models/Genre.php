<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = "boardgame_genre";


    public function boardgames()
    {
        return $this->belongsTo(Boardgame::class,'boardgame_id','id');
    }


}
