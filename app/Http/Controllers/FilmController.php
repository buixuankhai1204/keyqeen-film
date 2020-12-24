<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class FilmController extends Controller
{
    //
    public function index()
    {
        $film = Cache::remember('popular-games', 1, function () {
            return Http::get('https://imdb-api.com/en/API/Top250Movies/k_l23e8k5s', [])->json();
        });
        return view('topmovies', ['film' => $film]);
    }
    public function show($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/Title/k_tksprzkn/" . $film1 . "/Wikipedia", [])->json());
        $film->put('imDbId', $film1);
        return view('show', ['film' => $film]);
    }

    public function fullcast($film1)
    {

        $film = Http::get("https://imdb-api.com/en/API/FullCast/k_st2cb06c/" . $film1, [])->json();
        return view('fullcast', ['film' => $film]);
    }
    public function TopSeries()
    {
        $film = Cache::remember('popular-games', 1, function () {
            return Http::get('https://imdb-api.com/en/API/Top250TVs/k_4w2z14c0', [])->json();
        });
        return view('topseries', ['film' => $film]);
    }
    public function PopularMovies()
    {
        $film = Cache::remember('popular-games', 1, function () {
            return Http::get('https://imdb-api.com/en/API/MostPopularMovies/k_4w2z14c0', [])->json();
        });
        return view('popularmovies', ['film' => $film]);
    }
    public function PopularTVs()
    {
        $film = Cache::remember('popular-games', 1, function () {
            return Http::get('https://imdb-api.com/en/API/MostPopularTVs/k_4w2z14c0', [])->json();
        });
        return view('popularmovies', ['film' => $film]);
    }
    public function poster($film1)
    {
        $film = Http::get("https://imdb-api.com/en/API/Posters/k_tksprzkn/" . $film1, [])->json();
        return view('poster', ['film' => $film]);
    }
    public function image($film1)
    {
        $film = Http::get("https://imdb-api.com/en/API/Images/k_tksprzkn/" . $film1 . "/Short", [])->json();
        return view('image', ['film' => $film]);
    }
    public function name($name)
    {
        $name = Http::get("https://imdb-api.com/en/API/Name/k_st2cb06c/" . $name, [])->json();
        return view('name', ['name' => $name]);
    }
    public function trailer($film)
    {
        $film = Http::get("https://imdb-api.com/en/API/YouTubeTrailer/k_st2cb06c/" . $film, [])->json();
        return view('trailer', ['film' => $film]);
    }
    public function comingson()
    {
        $film = Http::get("https://imdb-api.com/en/API/ComingSoon/k_tksprzkn", [])->json();
        return view('comingson', ['film' => $film]);
    }
    public function intheaters()
    {
        $film = Http::get("https://imdb-api.com/en/API/InTheaters/k_tksprzkn", [])->json();
        return view('intheaters', ['film' => $film]);
    }
    public function search(Request $request)
    {
        $result = $request->input('result');
        $type = $request->option;
        if ($type == 1) {
            return redirect('search-title/' . $result);
        } elseif ($type == 2) {
            return redirect('search-movies/' . $result);
        } elseif ($type == 4) {
            return redirect('search-series/' . $result);
        } elseif ($type == 8) {
            return redirect('search-name/' . $result);
        } elseif ($type == 16) {
            return redirect('search-episode/' . $result);
        } elseif ($type == 32) {
            return redirect('search-company/'.$result);
        } elseif ($type == 64) {
            return redirect('search-keyword/' . $result);
        } else {
            return redirect('search-all/' . $result);
        }
    }
    public function search_title($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchTitle/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
    public function search_name($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchName/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
    public function search_movies($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchMovie/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
    public function search_company($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchCompany/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
    public function search_episode($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchEpisode/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
    public function search_keyword($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchKeyword/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
    public function search_series($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchSeries/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
    public function search_all($film1)
    {
        $film = collect(Http::get("https://imdb-api.com/en/API/SearchAll/k_tksprzkn/" . $film1, [])->json());
        $film->put('name', $film1);
        return view('search', ['film' => $film]);
    }
}
//k_tksprzkn
//k_l23e8k5s
//k_st2cb06c
//k_4w2z14c0
