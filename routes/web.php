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

    dd($this);

    Route::get('/', 'ClanController@index');

    Auth::routes();
});

Route::get('/', function () {
  return view('welcome');
})->name('cfox');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
