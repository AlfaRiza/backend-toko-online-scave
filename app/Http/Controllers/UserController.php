<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $category = Category::all();
        $category_limit = Category::limit(3)->with(['product'])->get();
        $produk_limit = Product::limit(4)->get();
        return view('user.index', [ 'category_limit' => $category_limit, 'produk_limit' => $produk_limit]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        // if (Auth::user()->id !== $id) {
        //     # code...
        // }
        // $category = Category::all();

        return view('user.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function about(Request $request)
    {
        // $category = Category::all();
        return view('user.about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $category = Category::all();
        $category_limit = Category::limit(3)->with(['product'])->get();

        return view('user.detail', [ 'category_limit' => $category_limit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        // $category = Category::all();
        return view('user.faq');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        
        return view('user.success');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function produk($id = 1)
    {
        // $category = Category::all();
        $produk = Product::where('category_id','=',$id)->get();
        return view('user.produk', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function promo($id = 1)
    {
        // $category = Category::all();
        $produk = Product::where('category_id','=',$id)->get();
        return view('user.produk', ['produk' => $produk]);
    }
}
