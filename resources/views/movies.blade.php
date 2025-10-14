@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<div class="list">
    <div class="list-top">
        <h1>Movies</h1>
    </div>

    <div class="list-items-container">
        @foreach($movies as $movie)
            <a href="{{ route('details', ['judul' => urlencode($movie->judul)]) }}" class="list-item">
                <img class="list-item-image" src="{{ $movie->gambar }}" alt="{{ $movie->judul }}" />
                <div class="list-item-details">
                    <p class="item-title">{{ $movie->judul }}</p>
                    <div class="list-item-details-year-rating">
                        <h5>{{ $movie->tahun }}</h5>
                        <i class="fa-solid fa-star"></i>
                        <h5>{{ $movie->rating }}</h5>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection