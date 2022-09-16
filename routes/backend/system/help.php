<?php

Route::group([
  'as' => 'dashboard.help.',
  'prefix' => 'dashboard/help',
  'namespace' => 'Backend',
], function(){
  Route::get('/', function () { return redirect('/dashboard/help/documentation'); });
  Route::get('documentation', 'DashboardController@documentation')->name('documentation');
});
