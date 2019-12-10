<?php

Route::get('login', [
	'as' 	=> 'login',
	'uses'  => 'DashboardController@login'
]);

Route::post('login-check.post', [
	'as' 	=> 'login-check.post',
	'uses'  => 'DashboardController@logincheck'
]);

Route::get('/', [
	'as' => '/',
	'uses' => 'FrontController@index'
]);

Route::get('get-all-blog', [
	'as' => 'get-all-blog',
	'uses' => 'FrontController@getAllBlog'
]);

Route::get('get-specific-service/{slug}', [
	'as'	=> 'get-specific-service',
	'uses' 	=> 'FrontController@getSpecificService'
]);

Route::get('get-specific-blog/{slug}', [
	'as'	=> 'get-specific-blog',
	'uses' 	=> 'FrontController@getSpecificBlog'
]);

Route::post('contact','ContactController@store');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

