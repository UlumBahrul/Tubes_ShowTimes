<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Showtime | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="/img/icon.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- showtime css --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- showtime icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    @stack('css')
  </head>
  <body>
    @if (session('succes'))
    <div class="p-3 bg-succes text-white">
      <div class="container">{{ session('success') }}</div>
    </div>
    @endif
    @if (session('danger'))
    <div class="p-3 bg-succes text-white">
      <div class="container">{{ session('danger') }}</div>
    </div>
    @endif
    @include('partials.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @stack('js')
  </body>
</html>