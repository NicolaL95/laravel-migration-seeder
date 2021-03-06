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

Route::get('/', 'FlightController@index')->name('flight.index');
Route::get('/flight/{flight}', 'FlightController@show')->name('flight.show');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{blog}', 'BlogController@show')->name('blog.show');

