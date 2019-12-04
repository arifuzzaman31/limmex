<?php

Route::get('welcome', function(){
	return view('welcome');
});
Route::get('/', [
	'as' => '/',
	'uses' => 'FrontController@index'
]);

Route::post('contact','ContactController@store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

