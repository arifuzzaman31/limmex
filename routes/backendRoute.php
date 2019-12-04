<?php 

Route::get('dashboard', [
	'as' 	=> 'dashboard',
	'uses'  => 'DashboardController@index'
]);

Route::get('login', [
	'as' 	=> 'login',
	'uses'  => 'DashboardController@login'
]);

Route::post('login-check.post', [
	'as' 	=> 'login-check.post',
	'uses'  => 'DashboardController@logincheck'
]);
	// Feature route
Route::get('get-feature', [
	'as' 	=> 'get-feature',
	'uses'  => 'FeatureController@getFeature'
]);

Route::get('feature-index', [
	'as' 	=> 'feature.index',
	'uses'  => 'FeatureController@index'
]);
Route::post('feature.store', [
	'as' 	=> 'feature.store',
	'uses'  => 'FeatureController@store'
]);

Route::post('feature-update/{id}', [
	'as' 	=> 'feature.update',
	'uses'  => 'FeatureController@update'
]);

Route::get('feature-delete/{id}', [
	'as' 	=> 'feature-delete',
	'uses'  => 'FeatureController@destroy'
]);

Route::get('edit.feature/{id}', [
	'as' 	=> 'edit.feature',
	'uses'  => 'FeatureController@edit'
]);

Route::get('show-feature/{id}', [
	'as' 	=> 'show-feature',
	'uses'  => 'FeatureController@show'
]);

Route::get('change-feature-status/{id}', [
	'as' 	=> 'change-feature-status',
	'uses'  => 'FeatureController@changestatus'
]);


	// Service route
Route::get('get-service', [
	'as' 	=> 'get-service',
	'uses'  => 'ServiceController@getService'
]);

Route::get('service.index', [
	'as' 	=> 'service.index',
	'uses'  => 'ServiceController@index'
]);

Route::post('service.store', [
	'as' 	=> 'service.store',
	'uses'  => 'ServiceController@store'
]);

Route::post('service-update/{id}', [
	'as' 	=> 'service.update',
	'uses'  => 'ServiceController@update'
]);

Route::get('service-delete/{id}', [
	'as' 	=> 'service-delete',
	'uses'  => 'ServiceController@destroy'
]);

Route::get('edit.service/{id}', [
	'as' 	=> 'edit.Service',
	'uses'  => 'ServiceController@edit'
]);

Route::get('show-service/{id}', [
	'as' 	=> 'show-Service',
	'uses'  => 'ServiceController@show'
]);

Route::get('change-service-status/{id}', [
	'as' 	=> 'change-service-status',
	'uses'  => 'ServiceController@changestatus'
]);

	// Blog
Route::get('blog.index', [
	'as' 	=> 'blog.index',
	'uses'  => 'BlogController@index'
]);

Route::post('blog.store', [
	'as' 	=> 'service.store',
	'uses'  => 'BlogController@store'
]);

Route::post('service-update/{id}', [
	'as' 	=> 'service.update',
	'uses'  => 'BlogController@update'
]);

Route::get('service-delete/{id}', [
	'as' 	=> 'service-delete',
	'uses'  => 'BlogController@destroy'
]);

Route::get('edit.service/{id}', [
	'as' 	=> 'edit.Service',
	'uses'  => 'BlogController@edit'
]);

Route::get('show-service/{id}', [
	'as' 	=> 'show-Service',
	'uses'  => 'BlogController@show'
]);

Route::get('change-service-status/{id}', [
	'as' 	=> 'change-service-status',
	'uses'  => 'BlogController@changestatus'
]);

Route::get('get-blog', [
	'as' 	=> 'get-blog',
	'uses'  => 'BlogController@getblog'
]);