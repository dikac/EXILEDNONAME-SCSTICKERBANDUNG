<?php

// TABLES
Route::group([
  'as' => 'system.table.',
  'prefix' => 'dashboard/tables',
  'namespace' => 'Backend\System\Table',
], function(){
  Route::get('/', function () { return redirect('/dashboard/profile'); });

  // TABLES - GENERALS
  Route::group([
    'as' => 'generals.',
    'prefix' => 'generals',
  ], function(){
    Route::get('active/{id}', 'GeneralController@active')->name('active');
    Route::get('inactive/{id}', 'GeneralController@inactive')->name('inactive');
    Route::get('restore/{id}', 'GeneralController@restore')->name('restore');
    Route::get('restoreall', 'GeneralController@restoreall')->name('restore-all');
    Route::get('delete-permanent/{id}', 'GeneralController@delete_permanent')->name('delete-permanent');
    Route::get('delete-permanentall', 'GeneralController@delete_permanentall')->name('delete-permanentall');
    Route::get('delete/{id}', 'GeneralController@delete')->name('delete');
    Route::get('deleteall', 'GeneralController@deleteall')->name('delete-all');
    Route::get('activities', 'GeneralController@activity')->name('activity');
    Route::get('trash', 'GeneralController@trash')->name('trash');
    Route::resource('/', 'GeneralController')->parameters(['' => 'id']);
  });

  // TABLES - RELATIONS
  Route::group([
    'as' => 'relations.',
    'prefix' => 'relations',
  ], function(){
    Route::get('active/{id}', 'RelationController@active')->name('active');
    Route::get('inactive/{id}', 'RelationController@inactive')->name('inactive');
    Route::get('restore/{id}', 'RelationController@restore')->name('restore');
    Route::get('restoreall', 'RelationController@restoreall')->name('restore-all');
    Route::get('delete-permanent/{id}', 'RelationController@delete_permanent')->name('delete-permanent');
    Route::get('delete-permanentall', 'RelationController@delete_permanentall')->name('delete-permanentall');
    Route::get('delete/{id}', 'RelationController@delete')->name('delete');
    Route::get('deleteall', 'RelationController@deleteall')->name('delete-all');
    Route::get('activities', 'RelationController@activity')->name('activity');
    Route::get('trash', 'RelationController@trash')->name('trash');
    Route::resource('/', 'RelationController')->parameters(['' => 'id']);
  });

});
