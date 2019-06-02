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

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

/*Route::delete('/posts', 'PostsController@destroy')->middleware('auth');
Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('auth');
Route::put('posts', 'PostsController@update')->middleware('auth');
Route::post('posts', 'PostsController@create')->middleware('auth');
Route::get('posts/{Post}', 'PostsController@show');*/
Route::resource('posts', 'PostsController');
Route::post('/posts/{post}/comments', 'PostCommentsController@store');
Auth::routes();
