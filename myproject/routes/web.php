<?php

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
Route::get('/abc','UserController@view');
Route::get('regbackend','UserController@index');
Route::get('delete','UserController@delete');
Route::get('edit','UserController@edit');
Route::get('update','UserController@update');
Route::get('/file','FileController@index');
Route::post('saveForm','FileController@create')->name('saveForm');
Route::get('/fileDelete/{id}','FileController@delete');
Route::get('/fileDownload/{file}','FileController@download');



