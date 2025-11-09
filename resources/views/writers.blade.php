{{-- File: resources/views/writers.blade.php --}}

@extends('layouts.main')

@section('container')
  <h1>Daftar Penulis</h1>

  @foreach ($writers as $writer)
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">
          {{-- Link ke halaman detail penulis --}}
          <a href="/writer/{{ $writer->id }}" class="text-decoration-none">
            {{ $writer->name }}
          </a>
        </h5>
        {{-- Tampilkan bio penulis --}}
        <p class="card-text">{{ $writer->bio }}</p>
      </div>
    </div>
  @endforeach

@endsection