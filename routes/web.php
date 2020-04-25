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
//
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','SearchController@index');
// Route::get('/search','SearchController@search');
Route::get('/search','MainController@search');
Route::get('/','MainController@index');
Route::get('/product/about/{id}', 'MainController@about');
Auth::routes();
Route::post('/create','HomeController@upload');
Route::get('/home', 'HomeController@index')->name('home');
