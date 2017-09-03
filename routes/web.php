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


Route::domain('{account}.'.Config::get('app.url'))->group(function () {
    Route::get('/', function ($account) {
        $clan = App\Clan::where('subdomain', $account)->first();
        if (!$clan) {
          return redirect(Config::get('app.url'));
        }
        // dd($clan);
        return  view('ui.clan', compact('clan'));
    });

    Auth::routes();
});

Route::get('/', function () {
  return view('welcome');
})->name('cfox');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
