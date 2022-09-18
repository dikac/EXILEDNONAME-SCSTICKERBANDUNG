<?php

Route::get('/', function () { return view('pages.frontend.themes.default'); });
Route::get('/', 'Frontend\GeneralController@index')->name('index');
Route::get('/help', function () { return view('pages.frontend.main.help'); });

Auth::routes();

include('backend\system\dashboard.php');
// include('backend\system\dummy.php');
// include('backend\system\management.php');
// include('backend\system\help.php');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
