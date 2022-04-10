<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "invoice";

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function refunds()
    {
        return $this->belongsTo(Refund::class,'invoice_id','id');
    }

    public function boardgames()
    {
        return $this->hasMany(Boardgame::class,'boardgame_id','id');
    }

}
