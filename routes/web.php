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

// Subdomain-Handling
Route::domain('{clan}.'.Config::get('app.url'))->group(function () {

    Route::get('/', 'ClanController@index');

    Auth::routes();
});


Route::get('/', function () {
  return view('welcome');
})->name('cfox');


Route::prefix('clans')->group(function() {
    Route::post('/', 'ClanController@store');
    Route::get('create', 'ClanController@create')->name('clans.create');
});

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');
