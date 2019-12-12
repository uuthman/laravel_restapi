<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    //
    use SoftDeletes;


    protected $fillable = ['quantity','buyer_id','seller_id'];

    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }

//    public function seller(){
//        return $this->belongsTo(Seller::class);
//    }

    public function product(){
        return $this->belongsTo(Product::class);

    }

}
