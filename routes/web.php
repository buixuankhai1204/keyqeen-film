<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::GET('/','App\Http\Controllers\FilmController@index')->name('top-250-movies');
route::GET('/top-250-series','App\Http\Controllers\FilmController@TopSeries')->name('top-250-series');
route::GET('/most-popular-movies','App\Http\Controllers\FilmController@PopularMovies')->name('PopularMovies');
route::GET('/coming-son','App\Http\Controllers\FilmController@comingson')->name('comingson');
route::GET('/in-theaters','App\Http\Controllers\FilmController@intheater')->name('intheater');
route::GET('/most-popular-TVs','App\Http\Controllers\FilmController@PopularTvs')->name('PopularTvs');
route::GET('/title/{film1}','App\Http\Controllers\FilmController@show');
route::GET('/fullcast/{film1}','App\Http\Controllers\FilmController@fullcast');
route::GET('/poster/{film1}','App\Http\Controllers\FilmController@poster');
route::GET('/images/{film1}','App\Http\Controllers\FilmController@image');
route::GET('/name/{name}','App\Http\Controllers\FilmController@name');
route::GET('/trailer/{film}','App\Http\Controllers\FilmController@trailer');
route::POST('/','App\Http\Controllers\FilmController@search');
route::GET('/search-title/{film1}','App\Http\Controllers\FilmController@search_title');
route::GET('/search-name/{film1}','App\Http\Controllers\FilmController@search_name');
route::GET('/search-company/{film1}','App\Http\Controllers\FilmController@search_company');
route::GET('/search-movies/{film1}','App\Http\Controllers\FilmController@search_movies');
route::GET('/search-keyword/{film1}','App\Http\Controllers\FilmController@search_keyword');
route::GET('/search-series/{film1}','App\Http\Controllers\FilmController@search_series');
route::GET('/search-all/{film1}','App\Http\Controllers\FilmController@search_all');
route::GET('/search-episode/{film1}','App\Http\Controllers\FilmController@search_episode');


