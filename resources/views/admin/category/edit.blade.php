@extends('layouts.admin_template')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Tambah Kategori</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            @forelse ($category as $category)
            <form action="{{ route('category-update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama Kategori</label>
                    <input type="text" value="{{ $category->name }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Kategori" id="name" >
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Deskripsi" rows="3">{{ $category->description }}</textarea>
                    @error('description')
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