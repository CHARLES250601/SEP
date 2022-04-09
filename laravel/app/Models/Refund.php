<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $table = "refund";

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
