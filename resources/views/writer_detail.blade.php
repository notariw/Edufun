
@extends('layouts.main')

@section('container')
  {{-- Tampilkan nama penulis yang sedang dilihat --}}
  <h1>Artikel oleh: {{ $writer->name }}</h1>
  
  {{-- Loop ini SAMA PERSIS dengan di halaman Home --}}
  @foreach ($articles as $article)
    <article class="mb-4 border-bottom pb-3">
      <h2>
        <a href="/article/{{ $article->id }}" class="text-decoration-none">
          {{ $article->title }}
        </a>
      </h2>
      <p>{{ $article->excerpt }}</p>
      <a href="/article/{{ $article->id }}" class="text-decoration-none">Read more...</a>
    </article>
  @endforeach

@endsection