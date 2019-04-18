<?php

Route::get('/', 'PagesController@home');
Route::get('/user','PagesController@user_info');
Route::post('/register','RegistrationController@store');
Route::get('/volunteer_register/{user_id}','RegistrationController@volunteer_register');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');
Route::get('/logout_user','SessionController@destroy_user');
Route::get('/admin_login','AdminController@create')->name('login');
Route::get('/admin','AdminController@index');
Route::post('/user_update/{id}','UserController@update');
Route::post('/question_answers','UserController@questionAnswers');
Route::get('{batch}','UserController@getBatchdata')->where(['batch' => '[0-9]+']);
Route::get('/single-page','PagesController@details');


Route::post('/post_create','PostsController@store');
Route::post('/comment/{userId}/{postID}','CommentController@store');
