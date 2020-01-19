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

Route::get('blogs', [
	'as' => 'get-all-blog',
	'uses' => 'FrontController@getAllBlog'
]);

Route::get('service/{id}', [
	'as'	=> 'get-specific-service',
	'uses' 	=> 'FrontController@getSpecificService'
]);

Route::get('get-ambulance-service', [
	'as'	=> 'get-ambulance-service',
	'uses' 	=> 'FrontController@ServiceForm'
]);

Route::get('blog/{id}', [
	'as'	=> 'get-specific-blog',
	'uses' 	=> 'FrontController@getSpecificBlog'
]);

Route::post('contact','ContactController@store');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

