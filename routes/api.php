<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>'cors'], function(){

    Route::get('student', 'studentController@index');
    Route::get('student/{stuid}', 'studentController@show');
    Route::post('student', 'studentController@store');
    Route::put('student/{stuid}', 'studentController@update');
    Route::delete('student/{stuid}', 'studentController@delete');

    Route::get('selection', 'selectionController@index');
    Route::get('selection/{selid}', 'selectionController@show');
    Route::post('selection', 'selectionController@store');
    Route::put('selection/{selid}', 'selectionController@update');
    Route::delete('selection/{selid}', 'selectionController@delete');

    Route::get('vote', 'voteController@index');
    Route::get('vote/{stuid}', 'voteController@show');
    Route::post('vote', 'voteController@store');
    Route::put('vote/{stuid}', 'voteController@update');
    Route::delete('vote/{stuid}', 'voteController@delete');
});