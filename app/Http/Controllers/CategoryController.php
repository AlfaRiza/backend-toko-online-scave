<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;
use App\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request){
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Category::create();
        return redirect()->route('category')->with('message', 'Data Produk '.$request->name.' berhasil ditambah');
    }

    public function show($slug){
        $id = Category::where('slug','=',$slug)->get('id');
        $category = Category::findOrFail($id);
        return view('admin.category.show', ['category' => $category]);
    }

    public function edit($slug){
        $id = Category::where('slug','=', $slug)->get('id');
        $category = Category::findOrFail($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update($id, CategoryRequest $request){
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ];
        Category::where('id','=',$id)->update($data);
        return \redirect()->route('category')->with('message', 'Data Kategori '.$request->name.' Berhasil di update');
    }

    public function destroy($id){
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->route('category')->with('message','Data Kategori Berhasil dihapus');
    }
}
