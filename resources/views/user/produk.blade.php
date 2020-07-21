@extends('layouts.user_template')

@section('content')
<section style="background-color: #050606;">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: #464646;">
              <li class="breadcrumb-item"><a class="text-secondary" href="{{ route('home') }}">Home</a></li>

              <li class="breadcrumb-item active text-warning" aria-current="page">{{ Request::url() == url('produk') ? 'Produk' : 'Promo' }}</li>
            </ol>
          </nav>
          <div class="dropdown d-lg-none">
            <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              @forelse ($category as $item)
              <a class="dropdown-item" href="#">{{ $item->name }}</a>
              @empty
                  <p class="text-white">-</p>
              @endforelse
            </div>
          </div>
        </div>
      </div>
      <div class="row navigasi">
        <!-- Navigasi -->
        <div class="col-3 d-none d-lg-block">
          <div class="list-group sticky-top" style="padding-top: 60px;">
            @forelse ($category as $item)
            <a href="{{ route('produk', $item->id) }}" class="list-group-item list-group-item-action">
              {{ $item->name }}
            </a>
            @empty
            <p class="text-white">-</p>
            @endforelse
          </div>
        </div>
        <!-- Main Category -->
        <div class="col-lg-9 col-12">
          <div class="row">
            <div class="col">
              <h1 class="text-warning pt-5 text-header">Our Product</h1>
              <p class="text-scn">Temukan produk yang sesuai dengan mu</p>
            </div>
          </div>
          <div class="row">
            @forelse ($produk as $prod)
            <div class="col-6 col-lg-3">
              <figure class="figure">
                <div class="produk-img">
                  <img src="{{ url('image/one.jpg') }}" width="200px" class="figure-img img-fluid rounded" alt="Produk">
                  <a href="{{ route('detail', $prod->id) }}" class="d-flex justify-content-center">
                    <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
                  </a>
                </div>
                <figcaption class="figure-caption">
                  <h5 class="text-warning">{{ $prod->name }}</h5>
                </figcaption>
                <p class="text-white">Rp. {{ number_format($prod->harga, 2, ',', '.') }} <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
              </figure>
            </div>
            @empty
                <div class="d-flex justify-content-center mx-auto">
                  <img src="{{ url('image/seccess.png') }}" alt="">
                  <h1 class="text-warning align-self-center">Maaf Produk Kosong</h1>
                </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection