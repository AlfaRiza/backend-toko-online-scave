<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Transaction;
use App\ProductImage;
class Product extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }

    public function transactions(){
        return $this->belongsToMany(Transaction::class, 'product_transaction');
    }

    public function product_image(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
