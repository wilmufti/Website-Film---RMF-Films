@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<div class="list">
    <div class="list-top">
      <h1>Movies</h1>
      <select id="select-category">
        <option value="popular">Popular</option>
        <option value="toprated">Top Rated</option>
        <option value="upcoming">Upcoming</option>
      </select>
    </div>

    <div class="genres-container">
      <div class="genres-left-arrow"><i class="fa-solid fa-angle-left"></i></div>
      <div class="genre-box-container">
        <div class="genre-box genre-box-active">All</div>
        <div class="genre-box">Action</div>
        <div class="genre-box">Adventure</div>
        <div class="genre-box">Animation</div>
        <div class="genre-box">Comedy</div>
        <div class="genre-box">Crime</div>
        <div class="genre-box">Documentary</div>
        <div class="genre-box">Drama</div>
        <div class="genre-box">Family</div>
        <div class="genre-box">History</div>
        <div class="genre-box">Horror</div>
        <div class="genre-box">Music</div>
        <div class="genre-box">Mystery</div>
        <div class="genre-box">Romance</div>
        <div class="genre-box">Science Fiction</div>
        <div class="genre-box">Tv Movie</div>
        <div class="genre-box">Thriller</div>
        <div class="genre-box">War</div>
        <div class="genre-box">Western</div>
      </div>
      <div class="genres-right-arrow"><i class="fa-solid fa-angle-right"></i></div>
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

@push('scripts')
<script src="{{ asset('js/movies-tv.js') }}"></script>
@endpush