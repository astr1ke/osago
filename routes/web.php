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


Route::get('/','mainController@welcome');
Route::get('/done','uploadController@done');
Route::get('/upload','uploadController@upload');
Route::post('/upload','uploadController@uploadPost');


