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

    Route::group(['prefix' => 'export'],function(){

        Route::get('/','HomeController@index');
        Route::get('boxList','ExportController@boxList');
    });

    Route::get('profile','HomeController@profile');
    Route::get('token','HomeController@token');
    Route::post('token','HomeController@postToken');
    
    Route::resource('pipelines','PipelinesController',['only' => ['index']]);
    Route::resource('pipelines.boxes','BoxesController',['only' => ['index']]);
    Route::post('pipelines/{id}/boxes','BoxesController@postBoxList');
});
