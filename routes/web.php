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

Route::get('/', 'HomeController@index')->name('home');
Route::get('resep/detail/{id}', 'HomeController@detail')->name('detail');
Route::get('resep/tambah', 'HomeController@form');
Route::post('resep/tambah', 'HomeController@save');
Route::get('resep/edit/{id}', 'HomeController@form');
Route::post('resep/edit/{id}', 'HomeController@save');
Route::get('resep/delete/{id}', 'HomeController@delete');

Route::get('bahan/{id}', 'BahanController@index');
Route::get('bahan/tambah/{id}', 'BahanController@form');
Route::post('bahan/tambah/{id}', 'BahanController@save');
Route::get('bahan/{id}/edit/{bahan_id}', 'BahanController@form');
Route::post('bahan/{id}/edit/{bahan_id}', 'BahanController@save');
Route::get('bahan/{id}/delete/{bahan_id}', 'BahanController@delete');

Route::get('make/{id}', 'MakeController@index');
Route::get('make/tambah/{id}', 'MakeController@form');
Route::post('make/tambah/{id}', 'MakeController@save');
Route::get('make/{id}/edit/{bahan_id}', 'MakeController@form');
Route::post('make/{id}/edit/{bahan_id}', 'MakeController@save');
Route::get('make/{id}/delete/{bahan_id}', 'MakeController@delete');

