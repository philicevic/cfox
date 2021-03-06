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

    Route::middleware('clan.auth')->group(function() {

        Route::get('/', 'ClanInterfaceController@index')->name('clan.home');

        Route::prefix('member')->group(function() {
            Route::get('/', 'MemberController@index')->name('clan.member');
            Route::get('/{nickname}', 'MemberController@show')->name('clan.member.show');
            Route::get('create', 'MemberController@create');
            Route::post('/', 'MemberController@store');
            Route::delete('/', 'MemberController@delete');
            Route::get('show/{nickname}', 'MemberController@show');
        });

        // Route::prefix('teams')->group(function() {
        //     Route::get('/', 'TeamsController@index');
        //     Route::get('create', 'TeamsController@create');
        //     Route::post('/', 'TeamsController@store');
        //     Route::delete('/', 'TeamsController@delete');
        //     Route::get('show/{teamname}', 'TeamsController@show');
        // });

    });

    Auth::routes();
});

// Maindomain-Handling
Route::domain(Config::get('app.url'))->group(function() {
    Route::get('/', function () {
      return view('frontend.welcome');
    })->name('cfox');

    Auth::routes();

    Route::middleware('auth')->group(function() {

        Route::prefix('clans')->group(function() {
            Route::post('/', 'ClanController@store');
            Route::get('create', 'ClanController@create')->name('clans.create');
        });

        Route::get('/home', 'DashboardController@index')->name('home');

        // Route::get('/notifications', 'DashboardController@notifications')->name('notifications');
        Route::get('/notifications', function() {
            return redirect(route('home'));
        })->name('notifications');

    });

    // Admin-Stuff
    Route::middleware(['auth', 'app.admin'])->group(function() {
        Route::prefix('users')->group(function() {
            Route::get('/', 'UserController@listActive')->name('admin.users.list');

            Route::get('/activate', 'UserController@ListNonActivated')->name('admin.users.activate');

            Route::post('/activate', 'UserController@activate');

            Route::post('/delete', 'UserController@delete');

            Route::get('/edit/{user}', 'UserController@edit')->name('admin.users.edit');

            Route::get('/invite', 'UserController@invite')->name('admin.users.invite');

            Route::post('/invite', 'UserController@sendInvite')->name('admin.users.sendInvite');
        });
    });
});
