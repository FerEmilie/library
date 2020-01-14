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

/**
 * Functions about books.
 *
 */
Route::get('/', 'HomeController@index');
Route::get('/books/create', 'BookController@create');
Route::post('/save', 'BookController@save');
Route::get('/books/showAll', 'BookController@showAll');

/**
 * Functions about libraries.
 *
 */
Route::get('/library/showWishList', 'LibraryController@showWishList');
Route::get('/library/showOwn', 'LibraryController@showOwn');
Route::get('/library/do/{id}', 'LibraryController@changeShelfDo');
Route::get('/library/wish/{id}', 'LibraryController@changeShelfWish');
Route::get('/library/delete/{id}', 'LibraryController@delete');

Auth::routes();
