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

Route::get('/', 'PagesController@getIndex');

Route::get('/menu', 'PagesController@getMenu');

Route::get('/restaurants', 'PagesController@getRestaurants');
Route::get('/contact', 'PagesController@getContact');
Route::get('/story', 'PagesController@getStory');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
