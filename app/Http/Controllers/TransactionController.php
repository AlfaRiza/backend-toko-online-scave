<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Product;
use Illuminate\Support\Facades\Auth;
use DB;

class TransactionController extends Controller
{
    public function cart(){
        $id = Auth::user()->id;
        $id_transaction = Transaction::where('user_id','=',$id)->get('id');
        $cart = Transaction::with('products','user')->find($id_transaction);
        // dd($cart);
        // $cart = 
        return view('user.cart', ['cart' => $cart]);
    }
}
