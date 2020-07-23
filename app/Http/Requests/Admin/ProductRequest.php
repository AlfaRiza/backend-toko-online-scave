<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products,name',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:0'
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Nama produk harus diisi',
            'name.unique' => 'Nama produk sudah ada, silahkan masukkan nama lain',
            'category_id.required' => 'Kategori harus diisi',
            'category_id.exist' => 'Kategori tidak ada',
            'description.required' => 'Deskripsi harus diisi',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa angka',
            'harga.min' => 'Harga minimal 0',
            'stock.required' => 'Stock harus diisi',
            'stock.numeric' => 'Stock harus berupa angka',
            'stock.min' => 'Stock minimal 0',
        ];
    }
}
