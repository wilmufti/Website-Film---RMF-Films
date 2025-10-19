@extends('layouts.app')

@section('title', 'RMF Films')

@section('content')
  <!-- Slider -->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="https://wallpaperaccess.com/full/9336992.gif" />
      <div class="slider-text">Kimi no Nawa</div>
    </div>
    <div class="mySlides fade">
      <img src="https://gifdb.com/images/high/sasuke-vs-naruto-digital-art-8tauqi3yvslpzy6x.gif" />
      <div class="slider-text">Naruto: Shippuuden</div>
    </div>
    <div class="mySlides fade">
      <img src="https://i.namu.wiki/i/0soiSnZ-swpt5XT0Xdg1f--aymZ6D82WT6JaOzX8zkdCX1Uf144dSkJjOa04t2se2ckk7jT-2hLyjDk-GdVCDg.gif" />
      <div class="slider-text">Doraemon</div>
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>

  <br />
  <div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <!-- TRENDING -->
  <div class="custom-scrollbar-container">
    <div class="upper-scrollbar">
      <h3>Trending</h3>
      <div class="upper-scrollbar-right">
        <a href="#">All</a>
        <a href="#">Movies</a>
        <a href="#">Tv Series</a>
        <a href="#">People</a>
      </div>
    </div>

    <div id="custom-scrollbar-trending" class="custom-scrollbar">
      <button id="left-scroll" onclick="scrollLeftTrending()"><i class="fa-solid fa-angle-left"></i></button>
      <button id="right-scroll" onclick="scrollRightTrending()"><i class="fa-solid fa-angle-right"></i></button>

      @foreach ($trending as $film)
        <div class="info-box">
          <a href="{{ url('details/' . urlencode($film->judul)) }}">
            <img src="{{ $film->poster }}" alt="{{ $film->judul }}" />
          </a>
          <div class="home-scrollbar-title">{{ $film->judul }}</div>
          <div class="home-scrollbar-rating">{{ $film->rating }}</div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- POPULAR -->
  <div class="custom-scrollbar-container">
    <div class="upper-scrollbar">
      <h3>Popular</h3>
      <div class="upper-scrollbar-right">
        <a href="#">All</a>
        <a href="#">Movies</a>
        <a href="#">Tv Series</a>
        <a href="#">People</a>
      </div>
    </div>

    <div id="custom-scrollbar-popular" class="custom-scrollbar">
      <button id="left-scroll" onclick="scrollLeftPopular()"><i class="fa-solid fa-angle-left"></i></button>
      <button id="right-scroll" onclick="scrollRightPopular()"><i class="fa-solid fa-angle-right"></i></button>

      @foreach ($popular as $film)
        <div class="info-box">
          <a href="{{ url('details/' . urlencode($film->judul)) }}">
            <img src="{{ $film->poster }}" alt="{{ $film->judul }}" />
          </a>
          <div class="home-scrollbar-title">{{ $film->judul }}</div>
          <div class="home-scrollbar-rating">{{ $film->rating }}</div>
        </div>
      @endforeach
    </div>
  </div>
@endsection

@push('scripts')
  <script type="module" src="{{ asset('js/main.js') }}"></script>
@endpush
