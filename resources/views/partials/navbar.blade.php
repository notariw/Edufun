{{-- File: resources/views/partials/navbar.blade.php --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    {{-- LOGO (jika ada, masukkan di sini) --}}
    {{-- <img src="{{ asset('img/logo.png') }}" alt="EduFun Logo" width="30" height="24" class="d-inline-block align-text-top me-2"> --}}
    
    <a class="navbar-brand" href="/">EduFun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      {{-- Tambahkan kelas ms-auto di sini --}}
      <ul class="navbar-nav ms-auto"> 
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Categories') ? 'active' : '' }}" href="/categories">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Our Writers') ? 'active' : '' }}" href="/writers">Writers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About Us') ? 'active' : '' }}" href="/about">About Us</a>
        </li>
        {{-- Tambahkan link untuk "Popular" di sini nanti jika sudah dibuat --}}
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($title === 'Popular') ? 'active' : '' }}" href="/popular">Popular</a>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>