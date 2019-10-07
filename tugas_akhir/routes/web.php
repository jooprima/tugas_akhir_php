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

Route::post('/pushData','Biodata@store');
Route::get('/getData','Biodata@getData');
Route::get('/hapusData/{id}','Biodata@hapus');
Route::get('/getDetail/{id}','Biodata@getDetail');
Route::post('/updateData','Biodata@update');
