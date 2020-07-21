<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #050606;">
      <a class="navbar-brand text-warning" href="{{ route('home') }}">
        <img src="{{ url('image/logo1.png') }}" width="30px" class="rounded-circle d-inline-block align-top" alt="" loading="lazy" />
        Scave
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link {{ Request::url() == url('/') ? 'active' : '' }} mr-3" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link {{ Request::url() == url('produk') ? 'active' : '' }} mr-3" href="{{ route('produk') }}">Produk</a>
          <a class="nav-item nav-link {{ Request::url() == url('promo') ? 'active' : '' }} mr-3" href="{{ route('promo') }}">Promo</a>
          <a class="nav-item nav-link {{ Request::url() == url('about') ? 'active' : '' }} mr-3" href="{{ route('about') }}">About Us</a>
          <a class="nav-item nav-link {{ Request::url() == url('faq') ? 'active' : '' }} mr-3" href="{{ route('faq') }}">FAQ</a>
          <a href="{{ route('cart') }}" class="d-lg-none btn rounded-pill px-lg-4 py-lg-2 mr-lg-2 text-warning"><i
              class="fas fa-fw fa-cart-plus"></i>
            Cart</a>
          @guest
          <a href="{{ route('login') }}" class="d-lg-none btn btn-outline-warning rounded-pill px-lg-4 py-lg-2">Login</a>    
          @else
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <button class="btn btn-outline-warning rounded-pill px-lg-4 py-lg-2">Logout</button>
          </form>          
          @endguest
        </div>
      </div>
      <div class="d-none d-lg-flex justify-content-end">
        <a href="{{ route('cart') }}" class="btn rounded-pill px-lg-4 py-lg-2 mr-lg-2 text-warning"><i
            class="fas fa-fw fa-cart-plus"></i>
          Cart</a>
        @guest
            <a href="{{ route('login') }}" class="btn btn-outline-warning rounded-pill px-lg-4 py-lg-2">Login</a>
        @else
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="btn btn-outline-warning rounded-pill px-lg-4 py-lg-2">Logout</button>
        </form>       
       @endguest
      </div>

    </nav>
  </div>