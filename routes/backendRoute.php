<?php 

Route::get('dashboard', [
	'as' 	=> 'dashboard',
	'uses'  => 'DashboardController@index'
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
	'as' 	=> 'blog.store',
	'uses'  => 'BlogController@store'
]);

Route::post('blog-update/{id}', [
	'as' 	=> 'blog.update',
	'uses'  => 'BlogController@update'
]);

Route::get('blog-delete/{id}', [
	'as' 	=> 'blog-delete',
	'uses'  => 'BlogController@destroy'
]);

Route::get('edit.blog/{id}', [
	'as' 	=> 'edit.blog',
	'uses'  => 'BlogController@edit'
]);

Route::get('show-blog/{id}', [
	'as' 	=> 'show-blog',
	'uses'  => 'BlogController@show'
]);

Route::get('change-blog-status/{id}', [
	'as' 	=> 'change-blog-status',
	'uses'  => 'BlogController@changeStatus'
]);

Route::get('get-blog', [
	'as' 	=> 'get-blog',
	'uses'  => 'BlogController@getblog'
]);

	//Team Member

Route::get('team.index', [
	'as' 	=> 'team-member.index',
	'uses'  => 'MemberController@index'
]);

Route::get('get-member', [
	'as' 	=> 'get-member',
	'uses'  => 'MemberController@getMember'
]);

Route::post('member.store', [
	'as' 	=> 'member.store',
	'uses'  => 'MemberController@store'
]);

Route::post('member-update/{id}', [
	'as' 	=> 'member.update',
	'uses'  => 'MemberController@update'
]);

Route::get('member-delete/{id}', [
	'as' 	=> 'member-delete',
	'uses'  => 'MemberController@destroy'
]);

Route::get('edit.member/{id}', [
	'as' 	=> 'edit.member',
	'uses'  => 'MemberController@edit'
]);

Route::get('show-member/{id}', [
	'as' 	=> 'show-member',
	'uses'  => 'MemberController@show'
]);

Route::get('change-member-status/{id}', [
	'as' 	=> 'change-member-status',
	'uses'  => 'MemberController@changeStatus'
]);


	//Portfolio

Route::get('portfolio.index', [
	'as' 	=> 'portfolio.index',
	'uses'  => 'PortfolioController@index'
]);

Route::get('get-portfolio', [
	'as' 	=> 'get-portfolio',
	'uses'  => 'PortfolioController@getPortfolio'
]);

Route::post('portfolio.store', [
	'as' 	=> 'portfolio.store',
	'uses'  => 'PortfolioController@store'
]);

Route::post('portfolio-update/{id}', [
	'as' 	=> 'portfolio.update',
	'uses'  => 'PortfolioController@update'
]);

Route::get('portfolio-delete/{id}', [
	'as' 	=> 'portfolio-delete',
	'uses'  => 'PortfolioController@destroy'
]);

Route::get('edit.portfolio/{id}', [
	'as' 	=> 'edit.portfolio',
	'uses'  => 'PortfolioController@edit'
]);

Route::get('change-portfolio-status/{id}', [
	'as' 	=> 'change-portfolio-status',
	'uses'  => 'PortfolioController@changeStatus'
]);