<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/publicacion', 'PublicationController@index')->name('publicationsIndex');
Route::get('/publicacion/create', 'PublicationController@create')->name('publicationsCreate');
Route::post('/publicacion', 'PublicationController@store')->name('publicationsStore');
Route::get('/publicacion/{publication}', 'PublicationController@show')->name('publicationsShow');
Route::get('/publicacion/{publication}/edit', 'PublicationController@edit')->name('publicationsEdit');
Route::put('/publicacion/{publication}', 'PublicationController@update')->name('publicationsUpdate');
Route::delete('/publicacion/{publication}', 'PublicationController@destroy')->name('publicationsDestroy');
