<?php

Route::get('/', function () { return view('pages.frontend.themes.default'); });
Route::get('/help', function () { return view('pages.frontend.main.help'); });

Auth::routes();

include('backend\system\dashboard.php');
include('backend\system\dummy.php');
include('backend\system\management.php');
include('backend\system\help.php');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
