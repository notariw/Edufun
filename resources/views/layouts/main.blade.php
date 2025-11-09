{{-- File: resources/views/layouts/main.blade.php --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Judul halaman akan dinamis --}}
    <title>EduFun | {{ $title }}</title>

    {{-- Link ke Bootstrap CSS (sesuai permintaan soal) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    @include('partials.navbar')

    <div class="container mt-4">
      {{-- 2. Di sinilah konten unik setiap halaman akan "disuntikkan" --}}
      @yield('container')
    </div>

    {{-- (Anda bisa tambahkan Footer di sini jika mau) --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  {{-- File: resources/views/layouts/main.blade.php --}}

    </div>

    {{-- BAGIAN FOOTER BARU --}}
    <footer class="bg-dark text-white text-center py-3 mt-5">
      <div class="container">
        <p class="mb-0"> EduFun 2025 | Web Programming | Muhammad Ariq Al Hakim | 2702369296</p>
      </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
</html>