@extends('layouts.admin_template')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Produk</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            @forelse ($product as $product)
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" value="{{ $product->name }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Produk" id="name" >
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="form-control" name="category_id" id="category">W
                        @forelse ($category as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                        @empty
                            <option disabled>Tidak ada pilihan ketegori</option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Deskripsi" rows="3">{{ $category->description }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" min="0" value="{{ $product->harga }}" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga" id="harga" >
                    @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stock">Stok</label>
                    <input type="number" min="0" value="{{ $product->stock }}" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Stok" id="stock" >
                    @error('stock')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn px-4 py-1 rounded-pill btn-warning"><i class="far fa-paper-plane"></i> Send</button>
                </div>
            </form>  
            @empty
                
            @endforelse 
        </div>
    </div>
@endsection