@extends('layouts.app')
@section('title', 'TV Series')
@section('content')
<div class="list">
    <div class="list-top">
        <h1>TV Series</h1>
    </div>
    <div class="list-items-container">
        @forelse($tvSeries as $series)
            <a href="{{ route('details', ['judul' => urlencode($series->judul)]) }}" class="list-item">
                <img class="list-item-image" src="{{ $series->gambar }}" alt="{{ $series->judul }}" />
                <div class="list-item-details">
                    <p class="item-title">{{ $series->judul }}</p>
                    <div class="list-item-details-year-rating">
                        <h5>{{ $series->tahun }}</h5>
                        <i class="fa-solid fa-star"></i>
                        <h5>{{ $series->rating }}</h5>
                    </div>
                </div>
            </a>
        @empty
            <p>Tidak ada TV Series dalam database.</p>
        @endforelse
    </div>
</div>
@endsection