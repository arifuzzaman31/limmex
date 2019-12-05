<?php

Route::get('login', [
	'as' 	=> 'login',
	'uses'  => 'DashboardController@login'
]);

Route::post('login-check.post', [
	'as' 	=> 'login-check.post',
	'uses'  => 'DashboardController@logincheck'
]);

Route::get('welcome', function(){
	return view('welcome');
});
Route::get('/', [
	'as' => '/',
	'uses' => 'FrontController@index'
]);

Route::post('contact','ContactController@store');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

