@extends('layouts.app')
@section('title', $person->name)

@section('content')
<div class="details-container">
    <div class="details-header">
        <a href="{{ route('people') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" />
        </a>
    </div>

    <div class="people-details-content">
        {{-- Bagian kiri: Personal Info --}}
        <div class="personal-info">
            <img 
                src="{{ $person->profile_image_url ?: asset('images/default-profile.png') }}" 
                alt="{{ $person->name }}" 
            />
            <h1 class="people-details-name-mobile">{{ $person->name }}</h1>
            <h3 class="personal-info-text">Personal Info</h3>

            <div class="personal-info-items">
                <strong>Known For</strong>
                <p>{{ $person->known_for_department }}</p>
            </div>
            <div class="personal-info-items">
                <strong>Known Credits</strong>
                <p>{{ $person->known_credits_count }}</p>
            </div>
            <div class="personal-info-items">
                <strong>Gender</strong>
                <p>{{ $person->gender }}</p>
            </div>
            <div class="personal-info-items">
                <strong>Birthday</strong>
                <p>
                    @if($person->birth_date)
                        {{ $person->birth_date }} 
                        ({{ \Carbon\Carbon::parse($person->birth_date)->age }} years old)
                    @else
                        -
                    @endif
                </p>
            </div>
            <div class="personal-info-items">
                <strong>Place of Birth</strong>
                <p>{{ $person->place_of_birth }}</p>
            </div>

            @if(!empty($person->also_known_as))
                <div class="personal-info-items also-known-as">
                    <strong>Also Known As</strong>
                    <ul>
                        @foreach(json_decode($person->also_known_as, true) as $aka)
                            <li>{{ $aka }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        {{-- Bagian kanan: Biografi, Known For, dan Credits --}}
        <div class="people-details-right">
            <h1 class="people-details-name">{{ $person->name }}</h1>

            <div class="biography">
                <h3>Biography</h3>
                <p>{!! nl2br(e($person->biography)) !!}</p>
            </div>

            {{-- Known For Section --}}
            @php
                $knownForFilms = json_decode($person->known_for_films, true);
            @endphp
            @if(!empty($knownForFilms))
                <div class="people-details-scroll-container">
                    <h3>Known For</h3>
                    <div class="people-details-scroll">
                        @foreach($knownForFilms as $film)
                            <div class="people-details-scroll-item">
                                <img src="{{ $film['image_url'] }}" alt="{{ $film['alt'] }}" />
                                <p>{{ $film['title'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- Credits Section --}}
            @php
                $filmCredits = json_decode($person->film_credits, true);
            @endphp
            @if(!empty($filmCredits))
                <div class="credits">
                    <h3>Credits</h3>
                    <table>
                        <tbody>
                            @php
                                $creditsByYear = collect($filmCredits)->groupBy('year')->sortKeysDesc();
                            @endphp
                            @foreach($creditsByYear as $year => $creditsInYear)
                                <tr>
                                    <td>
                                        <table class="credit-group">
                                            <tbody>
                                                @foreach($creditsInYear as $credit)
                                                    <tr>
                                                        <td class="year">{{ $year }}</td>
                                                        <td class="separator">
                                                            <div class="people-details-circle" onclick="togglePopup(this)">
                                                                <div class="popup">
                                                                    <img class="popup-img" src="{{ $credit['popup_image_url'] }}" />
                                                                    <div class="popup-right">
                                                                        <h3 class="popup-title">{{ $credit['popup_title'] }}</h3>
                                                                        <h5 class="popup-description">{!! nl2br(e($credit['popup_description'])) !!}</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="name">
                                                            {{ $credit['credit_role_main'] }}
                                                            @if(!empty($credit['credit_role_secondary']))
                                                                <span>{{ $credit['credit_role_secondary'] }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script type="module" src="{{ asset('js/people-details.js') }}"></script>
@endpush
