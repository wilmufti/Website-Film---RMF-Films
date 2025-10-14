@extends('layouts.app')
@section('title', 'Popular People')
@section('content')
<main class="list">
    <div class="list-top">
        <h1 class="list-top-title-people">Popular People</h1>
    </div>
    <div class="list-items-container">
        @forelse ($people as $person)
            <a href="{{ route('people.details', ['name' => urlencode($person->name)]) }}" class="list-item-people">
              <img class="list-item-image" src="{{ $person->image_url }}" alt="img" />
              <div class="list-item-details-people">
                <p class="item-title-people">{{ $person->name }}</p>
              </div>
            </a>
        @empty
          <p>Tidak ada data.</p>
        @endforelse
    </div>
</main>
@endsection