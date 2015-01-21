<?php

Route::group(['before' => 'auth'], function(){
	Route::get('/', 'SiteController@index');
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::post('/receivers/next', 'ReceiversController@nextReceiver');

	Route::resource('calls', 'CallsController', ['except' => ['destroy', 'create']]);
	Route::resource('receivers', 'ReceiversController', ['except' => ['destroy', 'create', 'show']]);
});

// Login routes
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('login', 'AuthController@postLogin');
