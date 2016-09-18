<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'JobController@index');

Route::get('/create', 'JobController@create');
Route::post('/create', 'JobController@store');
Route::get('/edit/{id}', 'JobController@edit');
Route::post('/edit/{id}', 'JobController@update');

Route::get('/delete/{id}', 'JobController@delete');
Route::post('/delete/{id}', 'JobController@delete_post');