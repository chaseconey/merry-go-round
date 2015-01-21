<?php

Route::group(['before' => 'auth'], function(){
	Route::get('/', 'SiteController@index');
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
});

// Login routes
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('login', 'AuthController@postLogin');
