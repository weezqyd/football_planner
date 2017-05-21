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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('teams', 'TeamsController', ['only' => ['index', 'create', 'store', 'show']]);
Route::resource('venues', 'VenuesController', ['only' => ['index', 'create', 'store']]);
Route::resource('fixtures', 'MatchesController', ['only' => ['index', 'create']]);
Route::resource('groups', 'GroupsController', ['only' => ['index', 'create']]);
