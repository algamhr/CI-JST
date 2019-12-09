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
Route::get('/dashboard', 'DashboardController@index');

Auth::routes();



Route::get('/public', 'PublicController@index');
Route::resource('dashboard', 'DashboardController');
Route::get('/dashboard/delete/{id}', 'DashboardController@destroy');
