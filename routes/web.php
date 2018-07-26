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

Route::get('/', 'HomeController@index');

Route::get('/kategori/tambah', 'KategoriController@create');
Route::post('/kategori/store', 'KategoriController@store');
Route::get('/kategori/{jenis}', 'KategoriController@list');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::post('/kategori/update/{id}', 'KategoriController@update');
Route::get('/kategori/delete/{id}', 'KategoriController@destroy');

Route::get('/transaction/pilih', 'TransactionController@pilih');
Route::get('/transaction/tambah/{jenis}', 'TransactionController@create');
Route::post('/transaction/store', 'TransactionController@store');
Route::get('/transaction/{jenis}', 'TransactionController@list');
Route::get('/transaction/edit/{id}', 'TransactionController@edit');
Route::post('/transaction/update/{id}', 'TransactionController@update');
Route::get('/transaction/delete/{id}', 'TransactionController@destroy');