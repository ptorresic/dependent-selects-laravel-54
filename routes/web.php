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

Route::get('home', 'HomeController@index');
Route::get('discussion', 'DiscussionController@discussion')->name('discussion');

//****** Locations ******//
Route::group(['middleware' => 'auth'], function()
{
    Route::resource('locations', 'LocationController');
    Route::get('get-state-list','LocationController@getStateList');
    Route::get('get-city-list','LocationController@getCityList');
});
