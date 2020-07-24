<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return view('admin.product.index', ['products'=> $products]);
    }

    public function create(){
        $categoies = Category::all();
        // dd($categoies);
        return view('admin.product.create', ['categories' => $categoies]);
    }

    public function store(ProductRequest $request){
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Product::create($data);
        return redirect()->route('product')->with('message', 'Produk '. $request->name .' berhasil ditambahkan');
    }

    public function show($slug){
        $id = Product::where('slug','=',$slug)->get('id');
        $product = Product::with(['category'])->findOrFail($id);
        return view('admin.product.show', ['product' => $product]);
    }
}
