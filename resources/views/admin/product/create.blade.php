@extends('layouts.admin_template')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Tambah Produk</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Produk" id="name" >
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="form-control" name="category_id" id="category">
                        @forelse ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                            <option disabled>Tidak ada pilihan ketegori</option>
                        @endforelse
                    </select>
                  </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Deskripsi" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" min="0" value="{{ old('harga') }}" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga" id="harga" >
                    @error('harga')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stock">Stok</label>
                    <input type="number" min="0" value="{{ old('stock') }}" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Stok" id="stock" >
                    @error('stock')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn px-4 py-1 rounded-pill btn-warning"><i class="far fa-paper-plane"></i> Send</button>
                </div>
            </form>   
        </div>
    </div>
@endsection