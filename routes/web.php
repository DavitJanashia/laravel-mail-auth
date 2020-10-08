<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('post.index');
Route::get('/post/delete/{id}', 'LoggedController@delete') -> name('post.delete');

Route::get('/post/create', 'LoggedController@create') -> name('post.create');
Route::post('/post/store', 'LoggedController@store') -> name('post.store');


Route::get('/post/edit/{id}', 'LoggedController@edit') -> name('post.edit');
Route::post('/post/update/{id}', 'LoggedController@update') -> name('post.update');

Route::get('/post/{id}', 'GuestController@show') -> name('post.show');
