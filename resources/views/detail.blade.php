{{-- File: resources/views/detail.blade.php --}}

@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $article->title }}</h2>

    <p>
        By: {{ $article->writer->name }}
        in
        {{ $article->category }}
    </p>

    {{-- 'posted_at' adalah nama kolom default dari timestamps() --}}
    <small>Tanggal Post: {{ $article->created_at->format('d M Y') }}</small>

    {{-- Tampilkan materi lengkap (body) --}}
    {{-- Tanda {!! ... !!} WAJIB dipakai agar tag <p>
         dari Seeder bisa ter-render sebagai HTML --}}
    <div class="mt-3">
      {!! $article->body !!}
    </div>
  </article>

  <a href="/" class="btn btn-primary mt-3">Kembali ke Home</a>
@endsection