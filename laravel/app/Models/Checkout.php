<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table  = "checkout";
    public $timestamps = false;


    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'address',
        'country',
        'post_code',
        'town'
    ];


    public function users()
    {
        return $this->belongsTo(Checkout::class,'user_id','id');
    }

    public function details()
    {
        return $this->belongsTo(Order_Detail::class,'id','checkout_id');
    }

}
