<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Film;
use App\Models\Movie;
use App\Models\TvSeries;
use App\Models\People;
use App\Models\PeopleDetail;
use App\Models\AnimeMetadata;

class FilmController extends Controller
{
    public function index()
    {
        $trending = Film::where('category', 'trending')->get();
        $popular = Film::where('category', 'popular')->get();
        return view('index', compact('trending', 'popular'));
    }

    public function movies()
    {
        $movies = Movie::orderBy('rating', 'desc')->get();
        return view('movies', compact('movies'));
    }

    public function tvSeries()
    {
        $tvSeries = TvSeries::orderBy('rating', 'desc')->get();
        return view('tv', compact('tvSeries'));
    }

    public function people()
    {
        $people = People::all();
        return view('people', compact('people'));
    }

    public function details($judul)
    {
        $judulDecoded = urldecode($judul);
        $film = null;
        $table = '';

        // Cari di berbagai tabel
        $filmData = Film::where('judul', $judulDecoded)->first();
        if ($filmData) {
            $film = $filmData;
            $table = 'films';
        } else {
            $filmData = TvSeries::where('judul', $judulDecoded)->first();
            if ($filmData) {
                $film = $filmData;
                $table = 'tv_series';
            } else {
                $filmData = Movie::where('judul', $judulDecoded)->first();
                if ($filmData) {
                    $film = $filmData;
                    $table = 'movies';
                }
            }
        }

        if (!$film) {
            abort(404, 'Judul tidak ditemukan di database.');
        }

        // Ambil metadata
        $metadata = AnimeMetadata::where('anime_name', $film->judul)->where('source', $table)->first();

        return view('details', [
            'film' => $film,
            'metadata' => $metadata,
            'table' => $table
        ]);
    }

    public function peopleDetails($name)
    {
        $person = PeopleDetail::where('name', urldecode($name))->firstOrFail();
        return view('people-details', compact('person'));
    }
}