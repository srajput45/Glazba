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

Route::get('/', 'PagesController@index');
route::get('/login','PagesController@login');
route::get('/signup','PagesController@signup');
route::get('/musicplayer','PagesController@musicplayer');
Auth::routes();
Route::get('/home', 'PagesController@index');
//Route::get('/home', 'HomeController@index')->name('home');
