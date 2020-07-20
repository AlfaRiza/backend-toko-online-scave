@extends('layouts.user_template')

@section('content')
<section style="background-color: #050606;">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: #464646;">
              <li class="breadcrumb-item"><a class="text-secondary" href="#">Home</a></li>
              <li class="breadcrumb-item active text-warning" aria-current="page">About Us</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row cart">
        <!-- Main Category -->
        <div class="col-lg-12 col-12" style="margin-top: -50px;">
          <div class="row">
            <div class="col">
              <h1 class="text-warning pt-5 text-header">About Us</h1>
            </div>
          </div>
          <div class="row mt-3">
            <h3 class="text-subheader">Toko Online</h3>
            <p class="text-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo maiores corporis,
              numquam aut nihil tenetur
              eius dolores amet debitis non vero pariatur natus sunt laboriosam, quod impedit quisquam ducimus. Quo.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection