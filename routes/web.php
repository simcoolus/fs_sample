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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/books', 'BooksController@index')->name('books');

    // Add and edit book form in view
    Route::get('/books/add', 'BooksFormController@createForm')->name('books.add');
    Route::get('/books/edit/{id}', 'BooksFormController@updateForm')->name('books.edit');

    // Post form data
    Route::post('/books/save', 'BooksFormController@saveForm')->name('books.save');
});
