<?php

Route::group([
  'as' => 'dashboard.',
  'prefix' => 'dashboard',
  'namespace' => 'Backend',
], function(){
  Route::get('/', 'DashboardController@index')->name('index');
  Route::get('file-manager', 'DashboardController@file_manager')->name('file-manager');
  // Route::get('messages', 'DashboardController@message')->name('message');
  Route::get('settings', 'DashboardController@setting')->name('setting');
  Route::patch('settings/update/{id}', 'DashboardController@setting_update')->name('setting-update');
  Route::get('language/{language}', 'DashboardController@language')->name('language');
  Route::get('logout', 'DashboardController@logout')->name('logout');

  // DASHBOARD - PROFILES
  Route::group([
    'as' => 'profile.',
    'prefix' => 'profile',
  ], function(){
    Route::get('/overview', 'DashboardController@profile_overview')->name('overview');
    Route::patch('/update-overview/{id}', 'DashboardController@profile_update_overview')->name('update-overview');
    Route::get('/security', 'DashboardController@profile_security')->name('security');
    Route::post('update-password', 'DashboardController@profile_update_password')->name('update-password');
    Route::get('/', function () { return redirect('/dashboard/profile/overview'); });
  });

});
