<?php

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
use Illuminate\Http\Request;
use App\Movie;
Auth::routes();



Route::auth();

Route::get('/home','HomeController@index');

Route::get('/','PageController@index');
Route::get('/top-movies','PageController@top_movies');
Route::get('/movie-details','PageController@movie_details');
Route::get('/search','PageController@search');

// TypesController routes
Route::get('/types/create','TypesController@create');
Route::post('/types/store','TypesController@store');
Route::get('/types','TypesController@index');
Route::get('/types/delete/{id}','TypesController@delete');




// MoviesController routes

 Route::get('/movies/create','MoviesController@create');
 Route::post('/movies/store','MoviesController@store');
 Route::get('/movies','MoviesController@index');
 Route::get('/movies/delete/{id}','MoviesController@delete');


 Route::get('/find',function(){

    $obada=Movie::where('name','<',50)->firstOrFail();
    return $obada;

 });

















