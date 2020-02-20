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

Route::get('/', 'homeController@show');
Route::get('/home', 'homeController@show');

Auth::routes();

Route::post('/post', 'PostController@store');
Route::get('/post/{post}', 'PostController@show');
Route::get('/post/create','PostController@create')->name('post.create');

Route::get('/profile/{id}', 'ProfileController@index')->name('profile');
Route::get('/profile/{id}/edit', 'ProfileController@edit');
Route::patch('/profile', 'ProfileController@update');



