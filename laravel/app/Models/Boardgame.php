<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardgame extends Model
{
    use HasFactory;
    protected $table  = "boardgame";
    public $timestamps = false;

    public function ratings()
    {
        return $this->hasMany(Rating::class,'boardgame_id','id');
    }

    public function Invoices()
    {
        return $this->belongsTo(Invoice::class,'boardgame_id','id');
    }


    public function genres()
    {
        return $this->hasOne(Genre::class,'boardgame_id','id');
    }

}
