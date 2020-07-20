@extends('layouts.user_template')

@section('content')
<section style="background-color: #050606;">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: #464646;">
              <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
              <li class="breadcrumb-item active text-warning" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Main -->
  <section style="background-color: #050606;">
    <div class="container pb-5">
      <div class="row cart">
        <div class="col-12" style="margin-top: -50px;">
          <div class="row">
            <div class="col">
              <h1 class="text-warning pt-5 text-header">Keranjang Anda</h1>
              <p class="text-scn">Berikut keranjang belanja anda</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Checkout -->
      <div class="row cart">
        <div class="col-lg-7 col-12">
          <table class="table">
            <thead>
              <tr class="text-warning">
                <th>No</th>
                <th>Foto</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-white">
                <td>1</td>
                <td>
                  <img src="{{ url('image/one.jpg') }}" width="50px" alt="">
                </td>
                <td>Kaos</td>
                <td>Rp. 120.000,00</td>
                <form action="">
                  <td><input type="number" name="jumlah" id="jumlah" min="1" max="10" value="1" style="width: 40px;">
                  </td>
                  <td>Rp. 120.000,00</td>
                  <td>
                    <div class="d-flex justify-content-between">
                      <a href=""><i class="fas fa-check text-warning"></i> </a>
                </form>
                <form action=""><a href=""><i class="fas fa-trash-alt text-danger"></i></a></form>
        </div>
        </td>
        </tr>
        <tr class="text-white">
          <td>1</td>
          <td>
            <img src="{{ url('image/one.jpg') }}" width="50px" alt="">
          </td>
          <td>Kaos</td>
          <td>Rp. 120.000,00</td>
          <form action="">
            <td><input type="number" name="jumlah" id="jumlah" min="1" max="10" value="1" style="width: 40px;"></td>
            <td>Rp. 120.000,00</td>
            <td>
              <div class="d-flex justify-content-between">
                <a href=""><i class="fas fa-check text-warning"></i> </a>
          </form>
          <form action=""><a href=""><i class="fas fa-trash-alt text-danger"></i></a></form>
      </div>
      </td>
      </tr>
      </tbody>
      </table>
    </div>
    <div class="col-lg-5 col-12">
      <div class="card text-white" style="background-color: #464646;">
        <h5 class="card-header">Informasi</h5>
        <div class="d-flex justify-content-between px-4">
          <p>ID Transaksi</p>
          <p>#121312</p>
        </div>
        <div class="d-flex justify-content-between px-4">
          <p>Total</p>
          <p>$240.000,00</p>
        </div>
        <div class="d-flex justify-content-between px-4">
          <p>Bank Transfers</p>
          <p>BNI</p>
        </div>
        <div class="d-flex justify-content-between px-4">
          <p>Nomor Rekening </p>
          <p>425354634523131</p>
        </div>
        <div class="d-flex justify-content-between px-4">
          <p>Nama Penerima</p>
          <p>Syabrina</p>
        </div>
      </div>
      <a href="#" class="btn btn-warning btn-block"><i class="fas fa-money-check-alt"></i> Bayar</a>
    </div>
    </div>
    <!-- Form -->
    <div class="row cart">
      <div class="col-6">
        <h2 class="text-warning">Informasi Pribadi</h2>
        <form action="" class="form">
          <div class="form-group">
            <label for="name" class="text-secondary">Name</label>
            <input type="text" id="name" placeholder="Name" class="form-control">
          </div>
          <div class="form-group">
            <label for="email" class="text-secondary">Email</label>
            <input type="email" id="email" placeholder="youremail@gmail.com" class="form-control">
          </div>
          <div class="form-group">
            <label for="no_telp" class="text-secondary">Nomor Telpon</label>
            <input type="text" id="no_telp" placeholder="082xxxx" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-secondary">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
              placeholder="Your Address"></textarea>
          </div>
        </form>
      </div>
    </div>
    </div>
  </section>
@endsection