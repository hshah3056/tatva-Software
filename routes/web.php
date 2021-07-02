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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','EventController@create')->name('event-create');
Route::post('/','EventController@create')->name('event-create');

Route::get('update','EventController@update')->name('event-update');
Route::post('update','EventController@update')->name('event-update');

Route::post('delete','EventController@delete')->name('event-delete');

Route::post('view','EventController@view')->name('event-view');
