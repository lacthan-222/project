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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles',
[
	'as' => 'articles.index',
	'uses' => 'ArticlesController@index'
]);

Route::get('/articles/{id}',
[
	'as' => 'articles.show',
	'uses' => 'ArticlesController@show'
]);

Route::delete('/articles/{id}',
[
	'as' => 'articles.destroy',
	'uses' => 'ArticlesController@destroy'
]);

Route::get('/categories',
[
	'as' => 'categories.index',
	'uses' => 'CategoryController@index'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
