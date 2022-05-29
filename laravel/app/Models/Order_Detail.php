<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    protected $table = "detail";
    public $timestamps = false;

    public function boardgames()
    {
        return $this->hasMany(Boardgame::class,'boardgame_id','id');
    }

    public function checkouts()
    {
        return $this->hasMany(Checkout::class,'checkout_id','id');
    }


}
