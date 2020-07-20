<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toko Online</title>
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('fontawesome-free/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ url('css/main.css') }}" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Poppins:wght@300;500;600&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  @include('includes.navbar')
  <!-- End of Navbar -->
  @yield('content')
  <!-- Footer -->
  @include('includes.footer')
  <!-- End Of Footer -->
  <script src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
  <!-- <script src="js/popper.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="{{ url('fontawesome-free/js/all.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>

</html>