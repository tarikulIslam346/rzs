<?php

Route::get('/', 'PagesController@home');
Route::get('/user','PagesController@batch_info');
Route::post('/register','RegistrationController@store');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');
Route::get('/logout_user','SessionController@destroy_user');
Route::get('/admin_login','AdminController@create')->name('login');
Route::get('/admin','AdminController@index');
Route::post('/user_update/{id}','UserController@update');
