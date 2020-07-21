<section class="pesan" style="{{ Request::url() == url('/') ? "background: url(".url('image/background1.jpg').");" : 'background-color: #050606;' }} background-attachment: fixed;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <h1 class="text-warning text-header">Categories</h1>
          <p class="text-scn">Temukan kategori yang sesuai dengan anda</p>
        </div>
      </div>
      <div class="row">
        <!-- Kaos -->
        @forelse ($category_limit as $item)
        <div class="col-12 col-lg-4">
          <h3 class="text-warning my-3">{{ $item->name }}</h3>
          <?php $count = 0 ?>
          @forelse ($item->product as $produk)
            @if ($count !== 3)
            <div class="media">
              <div class="produk-img">
                <img src="{{ url('image/one.jpg') }}" width="75px" class="figure-img img-fluid rounded" alt="Produk">
                <a href="{{ route('detail', $produk->id) }}" class="d-flex justify-content-center">
                  <img src="{{ url('image/detail.png') }}" class="align-self-center" alt="">
                </a>
              </div>
              <div class="media-body ml-2">
                <h5><a class="mt-0 text-warning" href="">{{ $produk->name }}</a></h5>
                <p class="text-white">{{ number_format($produk->harga, 2, ',', '.') }}<sup class="text-danger"><strike>Rp.150.000,00</strike></sup></p>
              </div>
            </div>
            @endif
            <?php $count++ ?>
          @empty
              <p class="text-white">-</p>
          @endforelse
        </div>
        @empty
        <p class="text-white">-</p>
        @endforelse
      </div>
    </div>
  </section>