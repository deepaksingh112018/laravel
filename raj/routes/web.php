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

// Route::get('/abc', function () {
//     return view('welcome');
// });

// Route::get('/raj', function() {
// 	return view('rajform');
// });

Route::get('/raj', 'User@view');
Route::get('backend', 'User@index');
Route::get('delete', 'User@delete');
Route::get('edit', 'User@edit');
Route::get('update', 'User@update');
Route::get('/file', 'FileController@index');
Route::post('saveForm', 'FileController@create')->name('saveForm');
