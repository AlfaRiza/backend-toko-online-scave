@extends('layouts.admin_template')

@section('content')
<div class="row">
    <div class="col-6">
        @forelse ($category as $item)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
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