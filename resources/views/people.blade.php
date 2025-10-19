@extends('layouts.app')

@section('title', 'Popular People')

@section('content')
  <div class="list">
    <div class="list-top">
      <h1 class="list-top-title-people">Popular People</h1>
    </div>

    <div class="list-items-container">
      @if($people->count() > 0)
        @foreach($people as $person)
          <a href="{{ url('people-details/' . urlencode($person->name)) }}" class="list-item-people">
            <img class="list-item-image" src="{{ $person->image_url }}" alt="{{ $person->name }}" />
            <div class="list-item-details-people">
              <p class="item-title-people">{{ $person->name }}</p>
            </div>
          </a>
        @endforeach
      @else
        <p>Tidak ada data.</p>
      @endif
    </div>

    <div class="pagination-container">
      <div class="pagination-box active-page">1</div>
      <div class="pagination-box">2</div>
      <div class="pagination-box">Next Page</div>
    </div>
  </main>
@endsection

@push('scripts')
  <script type="module" src="{{ asset('js/people.js') }}"></script>
@endpush
