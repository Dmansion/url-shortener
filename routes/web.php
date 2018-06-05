<?php
//Route::get('/', 'UrlsController@create');
Route::view('/', 'welcome');

Route::post('/', 'UrlsController@store');

Route::get('/{shortened}', 'UrlsController@show');