@extends('layouts.app')
@section('title', $film->judul)
@section('content')
<div class="details-container">
    <div class="details-header">
      <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="" />
      </a>
    </div>

    <div class="details-content-characters">
        <div class="details-left">
            <img src="{{ $table == 'films' ? $film->poster : $film->gambar }}" alt="{{ $film->judul }}" />
        </div>
        <div class="details-right">
            <div class="details-title-rating">
                <h1>{{ $film->judul }}</h1>
                <div class="details-rating">
                    <i class="fa-regular fa-star"></i>
                    <span>{{ $film->rating }}</span>
                </div>
            </div>
            @if($metadata)
                <p id="details-overview">{{ $metadata->description }}</p>
                <h2>Genres</h2>
                <div class="details-genres-container">
                    <div class="details-genres">
                        @foreach (explode(',', $metadata->genres) as $genre)
                            <div class="genre-boxes"><p>{{ trim($genre) }}</p></div>
                        @endforeach
                    </div>
                </div>
                <div class="actors">
                    <h2>Characters</h2>
                    <div class="actors-scroll">
                        @php $characters = json_decode($metadata->characters, true) ?? []; @endphp
                        @foreach ($characters as $char)
                            <div class="actors-card">
                                <div class="crop-container">
                                    <img src="{{ $char['image_url'] }}" alt="{{ $char['name'] }}" />
                                </div>
                                <div class="card-details">
                                    <p>{{ $char['name'] }}</p>
                                    <p>{{ $char['voice_actor'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p>Detail metadata tidak tersedia.</p>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script type="module" src="{{ asset('js/details.js') }}"></script>
@endpush