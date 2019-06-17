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

Route::get('/student', 'studentController@index');
Route::get('/student/show', 'studentController@show');
Route::get('/student/create', 'studentController@create');
Route::get('/student/update', 'studentController@update');
Route::get('/student/delete', 'studentController@delete');