@extends('layouts.user_template')

@section('content')
      <!-- Hero Banner -->
  <div class="jumbotron jumbotron-fluid" style="background-color: #050606;">
    <div class="container">
      <div class="row">
        <div class="col mt-md-5">
          <h1 class="display-4 text-header text-warning mt-5">New Style</h1>
          <p class="lead">
            Temukan style kaos kekinian hanya di Scave
          </p>
          <a href="" class="btn btn-warning text-white rounded-pill py-2 px-4">Cari Kaos</a>
        </div>
        <div class="col-5 d-none d-lg-flex">
          <div id="heroslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#heroslider" data-slide-to="0" class="active"></li>
              <li data-target="#heroslider" data-slide-to="1"></li>
              <li data-target="#heroslider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ url('image/one.jpg') }}" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{ url('image/two.jpg') }}" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="{{ url('image/tri.jpg') }}" class="d-block w-100" alt="..." />
              </div>
            </div>
            <a class="carousel-control-prev" href="#heroslider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroslider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Banner -->
  <!-- Benefits -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <img src="{{ url('image/Rectangle 1.png') }}" alt="">
          <h3 class="text-center text-warning">Murah Meriah</h3>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <img src="{{ url('image/Rectangle 2.png') }}" alt="">
          <h3 class="text-center text-warning">24 Jam</h3>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <img src="{{ url('image/Rectangle 3.png') }}" alt="">
          <h3 class="text-center text-warning">Terpercaya</h3>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <img src="{{ url('image/Rectangle 4.png') }}" alt="">
          <h3 class="text-center text-warning">Ramah Lingkungan</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Benefits -->
  <!-- Produk -->
  <section style="background-color: black;">
    <div class="container produk pb-5">
      <div class="row">
        <div class="col">
          <h1 class="text-warning pt-5 text-header">Our Product</h1>
          <p class="text-scn">Temukan produk yang sesuai dengan mu</p>
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
  <!-- End of Produk -->
  <!-- Cara Pesan -->
  <section class="pesan" style="background: url('image/background1.jpg'); background-attachment: fixed;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <h1 class="text-warning text-header">Categories</h1>
          <p class="text-scn">Temukan kategori yang sesuai dengan anda</p>
        </div>
      </div>
      <div class="row">
        <!-- Kaos -->
        <div class="col-12 col-lg-4">
          <h3 class="text-warning my-3">Kaos</h3>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/one.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Kaos Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/one.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Kaos Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/one.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Kaos Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
        </div>
        <!-- Jaket -->
        <div class="col-12 col-lg-4">
          <h3 class="text-warning my-3">Kaos</h3>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/two.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Kaos Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/two.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Kaos Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/two.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Jaket Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
        </div>
        <!-- Hoodie -->
        <div class="col-12 col-lg-4">
          <h3 class="text-warning my-3">Kaos</h3>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/tri.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Jaket Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/tri.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Hoodie Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
          <div class="media">
            <div class="produk-img">
              <img src="{{ url('image/tri.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
              <a href="" class="d-flex justify-content-center">
                <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
              </a>
            </div>
            <div class="media-body ml-2">
              <h5><a class="mt-0 text-warning" href="">Hoodie Oblong</a></h5>
              <p class="text-white">Rp. 120.000,00 <sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Cara Pesan -->
  <!-- Testimoni -->
  <section class="testimoni" style="background: black;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <h1 class="text-warning text-header">Testimoni</h1>
          <p class="text-scn">Apa kata mereka mengenai scave?</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="container py-5">
            <div id="carausel-testimoni" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="testimoni d-flex justify-content-center">
                    <blockquote class="text-testi">
                      "Kalo Gue, buat beli kaos, ngga bakal beli di toko material"
                    </blockquote>
                  </div>
                  <div class="d-flex justify-content-center">
                    <h5 class="text-warning">Iswatun Annas</h5>
                  </div>
                  <div class="d-flex justify-content-center">
                    <p class="text-bio">Mahasiswa IPB</p>
                  </div>
                  <div class="d-flex justify-content-center">
                    <img src="{{ url('image/avatar-1@2x.png') }}" width="40px" alt="">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimoni d-flex justify-content-center">
                    <blockquote class="text-testi">
                      "Bahannya sangat nyaman digunakan"
                    </blockquote>
                  </div>
                  <div class="d-flex justify-content-center">
                    <h5 class="text-warning">Ima</h5>
                  </div>
                  <div class="d-flex justify-content-center">
                    <p class="text-bio">Mahasiswa UMS</p>
                  </div>

                  <div class="d-flex justify-content-center">
                    <img src="{{ url('image/avatar-2@2x.png') }}" width="40px" alt="">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimoni d-flex justify-content-center">
                    <blockquote class="text-testi">
                      "Harganya sangat terjangkau, cocok untuk mahasiswa"
                    </blockquote>
                  </div>
                  <div class="d-flex justify-content-center">
                    <h5 class="text-warning">Dina</h5>
                  </div>
                  <div class="d-flex justify-content-center">
                    <p class="text-bio">Mahasiswa UGM</p>
                  </div>
                  <div class="d-flex justify-content-center">
                    <img src="{{ url('image/avatar-3@2x.png') }}" width="40px" alt="">
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carausel-testimoni" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"> Previsious
                </span>
              </a>
              <a class="carousel-control-next" href="#carausel-testimoni" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Testimoni -->
@endsection