<?php 

Route::get('dashboard', [
	'as' 	=> 'dashboard',
	'uses'  => 'DashboardController@index'
]);

Route::get('logout', [
	'as' 	=> 'logout',
	'uses'  => 'DashboardController@logout'
]);


	// Feature route
Route::get('get-feature', [
	'as' 	=> 'get-feature',
	'uses'  => 'FeatureController@getFeature'
]);

Route::get('feature', [
	'as' 	=> 'feature',
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

Route::get('service', [
	'as' 	=> 'service',
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

Route::get('service-delete/{slug}', [
	'as' 	=> 'service-delete',
	'uses'  => 'ServiceController@destroy'
]);

Route::get('edit.service/{slug}', [
	'as' 	=> 'edit.Service',
	'uses'  => 'ServiceController@edit'
]);

Route::get('show-service/{slug}', [
	'as' 	=> 'show-Service',
	'uses'  => 'ServiceController@show'
]);

Route::get('change-service-status/{slug}', [
	'as' 	=> 'change-service-status',
	'uses'  => 'ServiceController@changestatus'
]);

	// Blog
Route::get('blog', [
	'as' 	=> 'blog',
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

Route::get('team', [
	'as' 	=> 'team-member',
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

Route::get('portfolio', [
	'as' 	=> 'portfolio',
	'uses'  => 'PortfolioController@index'
]);

Route::get('get-portfolio', [
	'as' 	=> 'get-portfolio',
	'uses'  => 'PortfolioController@getPortfolio'
]);

Route::post('portfolio', [
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

	//Slider Route
Route::get('all-slider', [
	'as' 	=> 'all-slider',
	'uses'  => 'SliderController@index'
]);

Route::get('add-slider', [
	'as' 	=> 'add-slider',
	'uses'  => 'SliderController@create'
]);

Route::post('slider-put', [
	'as' 	=> 'slider.store',
	'uses'  => 'SliderController@store'
]);

Route::post('slider.update/{id}', [
	'as' 	=> 'slider.update',
	'uses'  => 'SliderController@update'
]);

Route::get('slider-delete/{id}', [
	'as' 	=> 'slider-delete',
	'uses'  => 'SliderController@destroy'
]);

Route::get('edit-slider/{id}', [
	'as' 	=> 'edit-slider',
	'uses'  => 'SliderController@edit'
]);

Route::get('change-slider-status/{id}', [
	'as' 	=> 'change-slider-status',
	'uses'  => 'SliderController@changeStatus'
]);

	//Product Route
Route::get('all-priceplan', [
	'as' 	=> 'all-priceplan',
	'uses'  => 'ProducrPriceController@index'
]);

Route::get('add-priceplan', [
	'as' 	=> 'add-priceplan',
	'uses'  => 'ProducrPriceController@create'
]);

Route::post('priceplan-put', [
	'as' 	=> 'priceplan.store',
	'uses'  => 'ProducrPriceController@store'
]);

Route::post('priceplan.update/{id}', [
	'as' 	=> 'priceplan.update',
	'uses'  => 'ProducrPriceController@update'
]);

Route::get('priceplan-delete/{id}', [
	'as' 	=> 'priceplan-delete',
	'uses'  => 'ProducrPriceController@destroy'
]);

Route::get('edit-priceplan/{id}', [
	'as' 	=> 'edit-priceplan',
	'uses'  => 'ProducrPriceController@edit'
]);

Route::get('change-priceplan-status/{id}', [
	'as' 	=> 'change-priceplan-status',
	'uses'  => 'ProducrPriceController@changeStatus'
]);
