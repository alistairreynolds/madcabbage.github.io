<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// route indexes
Route::get('/', 'FilmsController@index');
Route::resource('films', 'FilmsController');
Route::resource('genres', 'GenresController');
// filters


Route::get('contact', 'PagesController@contact');

Route::get('about', 'PagesController@about');

Route::get('home', 'PagesController@home');

//Route::get('genres/{genre}', 'GenresController@show');

// Authentication

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('admin', ['middleware' => 'admin', function(){
    return 'Admin page';
}]);