@extends('layouts.admin_template')

@section('content')
<div class="row">
    <div class="col-6">
        @forelse ($product as $item)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Kategori</p>
                    <p>{{ $item->category->name }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Harga</p>
                    <p>{{ $item->harga }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Stok</p>
                    <p>{{ $item->stock }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Sejak</p>
                    <p>{{ $item->created_at <= Carbon\Carbon::now()->subDays(1)   ? Carbon\Carbon::parse($item->created_at)->format('d-m-Y i') : Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</p>
                </div>
                
                <hr>
                <p class="card-text">{{ $item->description }}</p>
            </div>
        </div>
        @empty
            <h1>Kategori Tidak Ada</h1>
        @endforelse
        
    </div>
</div>
@endsection