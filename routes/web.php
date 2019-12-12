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

use App\Http\Controllers\DashboardController;

Route::get('/', 'PublicController@index');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



Route::get('/public', 'PublicController@index');
Route::get('/index_normalisasi', 'PublicController@index_normalisasi');
Route::resource('dashboard', 'DashboardController');
Route::resource('users', 'UserController');
Route::get('/dashboard/delete/{id}', 'DashboardController@destroy');

Route::get('export', 'MyController@export')->name('export');
Route::get('/importExportView', 'MyController@importview')->name('importview');
Route::post('import', 'MyController@import')->name('import');
Route::post('/normalisasi', 'PublicController@normalisasi')->name('normalisasi');
Route::post('/pengujian', 'PublicController@pengujian')->name('pengujian');
