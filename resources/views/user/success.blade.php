@extends('layouts.success_template')

@section('content')
<section style="background-color: #050606;">
    <div class="container py-5 d-flex justify-content-center">
        <img src="{{ url('image/seccess.png') }}" width="250px" alt="">
    </div>
    <p class="text-deskripsi text-center">Pembelian Berhasil, terimakasih telah belanjadi di toko online</p>
    <div class="d-flex justify-content-center pb-5">
        <a href="{{ route('home') }}" class="btn btn-warning rounded-pill px-4 py-2">Home</a>
    </div>
</section>
@endsection