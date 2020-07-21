@extends('layouts.user_template')

@section('content')
<section style="background-color: #050606;">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: #464646;">
              <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
              <li class="breadcrumb-item active text-warning" aria-current="page">Detail</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row cart">
        <!-- Main Category -->
        <div class="col-lg-12 col-12" style="margin-top: -50px;">
          <div class="row">
            <div class="col">
              <h1 class="text-warning pt-5 text-header">Detail</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-6 mb-5">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ url('image/one.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ url('image/tri.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ url('image/two.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="background-color: #464646;">
                <h5 class="card-header">Informasi</h5>
                <div class="card-body">
                  <h5 class="card-title text-warning">Kaos Jadul</h5>
                  <p class="card-text text-secondary deskripsi">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Repudiandae
                    recusandae
                    nemo explicabo dolorem ipsum, qui aliquid omnis quia? Impedit, fuga neque voluptatibus sint
                    blanditiis quasi adipisci vel harum sed iste.</p>
                  <p>
                    <span class="text-white">Rp. 120.000,00 </span><sup class="text-danger"><strike>Rp.
                        150.000,00</strike></sup>
                  </p>
                  <form action="cart.html">
                    <input type="number" name="jumlah" id="jumlah" min="1" max="10" value="1" style="width: 40px;">
                </div>
              </div>
              <a href="cart.html" class="btn btn-warning btn-block"><i class="fas fa-cart-arrow-down"></i> Add to
                cart</a>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Produk serupa -->
  <section id="serupa" class="serupa" style="background: url({{ url('image/background1.jpg') }}); background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="text-warning pt-1 text-header">Produk Serupa</h1>
          <p class="text-scn">Temukan produk yang serupa dengan barang diatas</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-lg-3">
          <figure class="figure">
            <div class="produk-img">
              <img src="{{ url('image/one.jpg') }}" width="200px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <figcaption class="figure-caption">
              <h5 class="text-warning">Kaos Oblong</h5>
            </figcaption>
            <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
          </figure>
        </div>
        <div class="col-6 col-lg-3">
          <figure class="figure">
            <div class="produk-img">
              <img src="{{ url('image/one.jpg') }}" width="200px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <figcaption class="figure-caption">
              <h5 class="text-warning">Kaos Oblong</h5>
            </figcaption>
            <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
          </figure>
        </div>
        <div class="col-6 col-lg-3">
          <figure class="figure">
            <div class="produk-img">
              <img src="{{ url('image/one.jpg') }}" width="200px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <figcaption class="figure-caption">
              <h5 class="text-warning">Kaos Oblong</h5>
            </figcaption>
            <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
          </figure>
        </div>
        <div class="col-6 col-lg-3">
          <figure class="figure">
            <div class="produk-img">
              <img src="{{ url('image/one.jpg') }}" width="200px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <figcaption class="figure-caption">
              <h5 class="text-warning">Kaos Oblong</h5>
            </figcaption>
            <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
          </figure>
        </div>

      </div>
    </div>
  </section>
  <!-- Produk Kategori -->
  @include('includes.category')
@endsection