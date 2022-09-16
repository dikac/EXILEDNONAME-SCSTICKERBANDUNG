<?php

// MANAGEMENTS
Route::group([
  'as' => 'system.management.',
  'prefix' => 'dashboard/managements',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('/', function () { return redirect('/dashboard/profile'); });

  // MANAGEMENTS - ACCESSES
  Route::group([
    'as' => 'accesses.',
    'prefix' => 'accesses',
  ], function(){
    Route::get('active/{id}', 'AccessController@active')->name('active');
    Route::get('inactive/{id}', 'AccessController@inactive')->name('inactive');
    Route::get('restore/{id}', 'AccessController@restore')->name('restore');
    Route::get('restoreall', 'AccessController@restoreall')->name('restore-all');
    Route::get('delete-permanent/{id}', 'AccessController@delete_permanent')->name('delete-permanent');
    Route::get('delete-permanentall', 'AccessController@delete_permanentall')->name('delete-permanentall');
    Route::get('delete/{id}', 'AccessController@delete')->name('delete');
    Route::get('deleteall', 'AccessController@deleteall')->name('delete-all');
    Route::get('activities', 'AccessController@activity')->name('activity');
    Route::get('trash', 'AccessController@trash')->name('trash');
    Route::resource('/', 'AccessController')->parameters(['' => 'id']);
  });

  // MANAGEMENTS - USERS
  Route::group([
    'as' => 'users.',
    'prefix' => 'users',
  ], function(){
    Route::get('active/{id}', 'UserController@active')->name('active');
    Route::get('inactive/{id}', 'UserController@inactive')->name('inactive');
    Route::get('restore/{id}', 'UserController@restore')->name('restore');
    Route::get('restoreall', 'UserController@restoreall')->name('restore-all');
    Route::get('delete-permanent/{id}', 'UserController@delete_permanent')->name('delete-permanent');
    Route::get('delete-permanentall', 'UserController@delete_permanentall')->name('delete-permanentall');
    Route::get('delete/{id}', 'UserController@delete')->name('delete');
    Route::get('deleteall', 'UserController@deleteall')->name('delete-all');
    Route::get('activities', 'UserController@activity')->name('activity');
    Route::get('trash', 'UserController@trash')->name('trash');
    Route::resource('/', 'UserController')->parameters(['' => 'id']);
  });

});
