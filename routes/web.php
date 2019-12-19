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

Route::get('/', 'pagesController@index');

Route::get('/aboute', 'pagesController@aboute');

Route::get('/index', 'pagesController@index');

Route::get('/services', 'pagesController@services');
//
Route::get('/posts', 'postsController@index')->name('posts.index');



//

Route::get('/posts/create','postsController@create')->name('posts.create');

Route::post('/posts','postsController@store')->name('posts.store');
Route::get('/posts/{id}','postsController@show')->name('posts.show');

Route::get('/posts/{id}/edit','PostsController@edit')->name('posts.edit');
Route::put('/posts/{id}','PostsController@update')->name('posts.update');

Route::delete('/posts/{id}','PostsController@destroy')->name('posts.destroy');





Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
