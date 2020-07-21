<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Transaction;
class Status extends Model
{
    protected $guard = [];

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'status_id','id');
    }
}
