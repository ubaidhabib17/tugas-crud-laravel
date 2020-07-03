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

Route::get('/items','itemController@index');
Route::get('/items/create', 'itemController@create');
Route::post('/items', 'itemController@store');

Route::get('/pertanyaan', 'pertanyaanController@index');
Route::get('/pertanyaan/create', 'pertanyaanController@create');
Route::post('/pertanyaan', 'pertanyaanController@store');
Route::get('/pertanyaan/{id}', 'pertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'pertanyaanController@edit'); //Menampilkan form edit
Route::put('/pertanyaan/{id}', 'pertanyaanController@update');// save perubahan dari form edit
Route::delete('/pertanyaan/{id}', 'pertanyaanController@destroy'); //hapus data denga id

Route::get('/jawaban/{pertanyaan_id}', 'jawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'jawabanController@store');



