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
    return view('home');
})->name('home');

Route::resource('masterJasa','jasaController');
Route::get('jasa','listController@index')->name('jasa.index');
Route::get('jasa/{id}','listController@show')->name('jasa.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
