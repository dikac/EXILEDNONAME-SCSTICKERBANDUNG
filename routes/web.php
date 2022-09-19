<?php

Route::get('/', function () { return view('pages.frontend.themes.default'); });
Route::get('/', 'Frontend\GeneralController@index')->name('index');
Route::get('/help', function () { return view('pages.frontend.main.help'); });

Auth::routes();

include(base_path(). '/routes/backend/system/dashboard.php');
include(base_path(). '/routes/backend/system/dummy.php');
include(base_path(). '/routes/backend/system/management.php');
include(base_path(). '/routes/backend/system/help.php');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
  'as' => 'main.banners.',
  'prefix' => 'dashboard/banners',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('active/{id}', 'BannerController@active')->name('active');
  Route::get('inactive/{id}', 'BannerController@inactive')->name('inactive');
  Route::get('restore/{id}', 'BannerController@restore')->name('restore');
  Route::get('restoreall', 'BannerController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'BannerController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'BannerController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'BannerController@delete')->name('delete');
  Route::get('deleteall', 'BannerController@deleteall')->name('delete-all');
  Route::get('activities', 'BannerController@activity')->name('activity');
  Route::get('trash', 'BannerController@trash')->name('trash');
  Route::resource('/', 'BannerController')->parameters(['' => 'id']);
});

Route::group([
  'as' => 'main.products.',
  'prefix' => 'dashboard/products',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('active/{id}', 'ProductController@active')->name('active');
  Route::get('inactive/{id}', 'ProductController@inactive')->name('inactive');
  Route::get('restore/{id}', 'ProductController@restore')->name('restore');
  Route::get('restoreall', 'ProductController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'ProductController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'ProductController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'ProductController@delete')->name('delete');
  Route::get('deleteall', 'ProductController@deleteall')->name('delete-all');
  Route::get('activities', 'ProductController@activity')->name('activity');
  Route::get('trash', 'ProductController@trash')->name('trash');
  Route::resource('/', 'ProductController')->parameters(['' => 'id']);
});

Route::group([
  'as' => 'main.sliders.',
  'prefix' => 'dashboard/sliders',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('active/{id}', 'SliderController@active')->name('active');
  Route::get('inactive/{id}', 'SliderController@inactive')->name('inactive');
  Route::get('restore/{id}', 'SliderController@restore')->name('restore');
  Route::get('restoreall', 'SliderController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'SliderController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'SliderController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'SliderController@delete')->name('delete');
  Route::get('deleteall', 'SliderController@deleteall')->name('delete-all');
  Route::get('activities', 'SliderController@activity')->name('activity');
  Route::get('trash', 'SliderController@trash')->name('trash');
  Route::resource('/', 'SliderController')->parameters(['' => 'id']);
});
