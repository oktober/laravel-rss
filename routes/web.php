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

/*Route::get('/', function () {
    return view('home', [
    	'rss_feed' => simplexml_load_file("https://staciefarmer.com/feed")
    ]);
});*/

Route::get('/', 'HomeController@listRecentEntries');

Route::get('/feeds', 'FeedsController@show');
Route::get('/entries', 'EntriesController@show');