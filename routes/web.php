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

Route::get('/add', 'HomeController@index')->name('add');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('HomeController/savelib', 'HomeController@savelib')->name('savelib');
Route::get('/list', 'HomeController@list')->name('list');
Route::get('/search', 'SearchController@search')->name('search');
Route::get('/autocompleteAntonym', array('as'=>'autocompleteAntonym','uses'=>'HomeController@autocompleteAntonym'));
Route::get('/autocompleteSynonym', array('as'=>'autocompleteSynonym','uses'=>'HomeController@autocompleteSynonym'));
Route::get('/autocompleteOmonym', array('as'=>'autocompleteOmonym','uses'=>'HomeController@autocompleteOmonym'));
