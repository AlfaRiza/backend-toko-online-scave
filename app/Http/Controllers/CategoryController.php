<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request){
        Category::create($request->all());
        return redirect()->route('category')->with('message', 'Data Produk '.$request->name.' berhasil ditambah');
    }
}
