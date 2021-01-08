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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/deepak', 'FormController@view');
Route::get('backend', 'FormController@index');
Route::get('delete', 'FormController@delete');
Route::get('edit', 'FormController@edit');
Route::get('update', 'FormController@update');
Route::get('/file', 'FormController@index');
Route::get('saveForm', 'FormController@create')->name('saveForm');

// Route::get('backend', 'FormController@backend');
// Route::get('delete', 'FormController@delete');
// Route::get('edit', 'FormController@edit');
// Route::get('update', 'FormController@update');
