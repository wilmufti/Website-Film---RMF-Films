@extends('layouts.app')
@section('title', $person->name)
@section('content')
<div class="details-container">
    <div class="details-header">
      <a href="{{ route('people') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" /></a>
    </div>
    <div class="people-details-content">
        <div class="personal-info">
            <img src="{{ $person->profile_image_url ?: asset('images/default-profile.png') }}" alt="{{ $person->name }}" />
            <h1 class="people-details-name-mobile">{{ $person->name }}</h1>
            <h3 class="personal-info-text">Personal Info</h3>
            {{-- Personal Info Items --}}
        </div>
        <div class="people-details-right">
            <h1 class="people-details-name">{{ $person->name }}</h1>
            <div class="biography">
                <h3>Biography</h3>
                <p>{!! nl2br(e($person->biography)) !!}</p>
            </div>
            {{-- Known for films & Credits --}}
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script type="module" src="{{ asset('js/people-details.js') }}"></script>
@endpush