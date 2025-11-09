{{-- File: resources/views/category_articles.blade.php --}}

@extends('layouts.main')

@section('container')
  <h1 class="mb-4">Artikel Kategori: {{ $title }}</h1>

  <div class="row">
    @foreach ($articles as $index => $article)
@php
        // 1. TENTUKAN NAMA FILE LENGKAP SECARA MANUAL DI SINI
        // ▼▼ UBAH NAMA GAMBAR INI (Misalnya) ▼▼
        $im_images = ['im1.jpg', 'im2.png', 'im3.webp']; // Interactive Multimedia
        $se_images = ['se1.jpg', 'se2.jpg', 'se3.png']; // Software Engineering

        $imageIndex = $index % count($im_images); // (Atau $index % 3)

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
          <img src="{{ asset('img/' . $imageName) }}" class="card-img-top" alt="{{ $article->category }}">
          
          <div class="card-body">
            <h5 class="card-title">
              <a href="/article/{{ $article->id }}" class="text-decoration-none">
                {{ $article->title }}
              </a>
            </h5>
            
            <small class="text-muted">
              By: {{ $article->writer->name }}
            </small>

            <p class="card-text">{{ $article->excerpt }}</p>
            
            <a href="/article/{{ $article->id }}" class="btn btn-primary">
              Read more...
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

@endsection