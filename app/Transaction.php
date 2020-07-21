<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;
use App\Status;
class Transaction extends Model
{
    protected $guard = [];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'product_transaction');
    }

    public function status(){
        return $this->hasOne(Status::class, 'status_id','id');
    }
}
