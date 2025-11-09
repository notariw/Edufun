{{-- File: resources/views/categories.blade.php --}}

@extends('layouts.main')

@section('container')
  <h1 class="mb-4 text-center">Pilih Kategori</h1>

  <div class="row justify-content-center">
    
    
    @foreach ($categories as $category)
      
      @php
        $imageName = '';
        $description = '';
        
        if ($category === 'Interactive Multimedia') {
            // (Ganti nama gambar & deskripsi)
            $imageName = 'category-im.jpg'; 
            $description = 'Jelajahi dunia Human Computer Interaction dan User Experience.';
        } else if ($category === 'Software Engineering') {
            // (Ganti nama gambar & deskripsi)
            $imageName = 'category-se.jpg';
            $description = 'Pelajari tentang Software Design Pattern, Agile, dan Code Reengineering.';
        }
      @endphp

      {{-- Kita buat card-nya di kolom 6-grid agar pas 2 per baris --}}
      <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
          
          {{-- Ambil gambar manual dari blok @php --}}
          <img src="{{ asset('img/' . $imageName) }}" class="card-img-top" alt="{{ $category }}" style="height: 250px; object-fit: cover;">
          
          <div class="card-body text-center">
            <h5 class="card-title fs-3">{{ $category }}</h5>
            <p class="card-text">{{ $description }}</p>
            
            {{-- Link ini akan mengarah ke halaman daftar artikel per kategori --}}
            <a href="/category/{{ $category }}" class="btn btn-primary">
              Lihat Semua Materi
            </a>
          </div>
        </div>
      </div> {{-- Akhir col-md-6 --}}

    @endforeach

  </div> {{-- Akhir .row --}}

@endsection