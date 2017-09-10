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
Route::get('/ping', 'SolariumController@ping');
Route::get('/ping_add', 'SolariumController@addDocuments');
Route::get('/ping_search', 'SolariumController@search');
Route::get('/ping_concept/{quantity?}/{page?}', 'SolariumController@init');

