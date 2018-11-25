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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('HomeController/savelib', 'HomeController@savelib')->name('savelib');
Route::get('/autocompleteAntonym', array('as'=>'autocompleteAntonym','uses'=>'HomeController@autocompleteAntonym'));
