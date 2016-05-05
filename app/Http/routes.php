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
Route::group(['middleware' => ['auth']],function(){
    Route::get('/','HomeController@index');
    Route::get('/home','HomeController@index');
    Route::get('profile','HomeController@profile');
    Route::get('token','HomeController@token');
    Route::post('token','HomeController@postToken');

    Route::get('pipelines','PipelinesController@index');
    Route::get('pipelines/{id}/boxes','BoxesController@index');
    Route::post('pipelines/{id}/boxes','BoxesController@postBoxList');
});
