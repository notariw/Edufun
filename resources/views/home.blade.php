{{-- File: resources/views/home.blade.php --}}

@extends('layouts.main')

@section('container')

  {{-- BAGIAN HERO IMAGE (Sudah Anda tambahkan) --}}
  <div class="p-5 mb-4 bg-light rounded-3" 
       style="background-image: url('{{ asset('img/hero1.jpg') }}'); 
              background-size: cover; 
              background-position: center; 
              height: 400px; 
              position: relative;">
    
    <div class="container-fluid py-5" 
         style="position: absolute; 
                bottom: 0; 
                left: 0; 
                right: 0; 
                background-color: rgba(0,0,0,0.5); 
                padding: 1rem;">
        
        <h1 class="display-5 fw-bold text-white">Selamat Datang di EduFun</h1>
    </div>
  </div>
  {{-- AKHIR BAGIAN HERO IMAGE --}}

  <h1 class="my-4">Artikel Terbaru</h1>

  <div class="row">
    
    @foreach ($articles as $index => $article)
      
      @php
        $im_images = ['im1.jpg', 'im2.png', 'im3.webp']; // Interactive Multimedia
        $se_images = ['se1.jpg', 'se2.jpg', 'se3.png']; // Software Engineering

        // 2. Kita dapatkan index (0, 1, atau 2)
        $imageIndex = $index % count($im_images); // (Atau $index % 3)

        // ▼▼ UBAH LOGIKA 'if' INI ▼▼
        if ($article->category === 'Interactive Multimedia') {
            $imageName = $im_images[$imageIndex];
        } else if ($article->category === 'Software Engineering') {
            $imageName = $se_images[$imageIndex];
        } else {
            $imageName = 'default.jpg';
        }
      @endphp

      <div class="col-md-4 mb-4">
        <div class="card">
          
          {{-- Bagian ini tidak perlu diubah, akan otomatis mengambil nama baru --}}
          <img src="{{ asset('img/' . $imageName) }}" class="card-img-top" alt="{{ $article->category }}">
          
          <div class="card-body">
            <h5 class="card-title">
              <a href="/article/{{ $article->id }}" class="text-decoration-none">
                {{ $article->title }}
              </a>
            </h5>
            
            <small class="text-muted">
              {{-- Teks "By" dan "In" (Sesuai Permintaan) --}}
              By: {{ $article->writer->name }}
              in
              {{ $article->category }}
              <p>{{ $article->created_at->diffForHumans() }}</p>
            </small>

            <p class="card-text">{{ $article->excerpt }}</p>
            
            <a href="/article/{{ $article->id }}" class="btn btn-primary">
              Read more...
            </a>
          </div>
        </div>
      </div> {{-- Akhir col-md-4 --}}

    @endforeach

  </div> {{-- Akhir .row --}}

@endsection