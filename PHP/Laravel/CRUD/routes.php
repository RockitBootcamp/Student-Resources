<?php // file: app/Http/routes.php

/**
 * Users
 */

// List all users
Route::get('/users', 'UserController@all');

// See User Profile
Route::get('/user/profile/{user_id}', 'UserController@get');
	->where('user_id', '[\d]+');
	
// Get User Form (Insert and Update forms)
Route::get('/user/form/{user_id?}', 'UserController@form')
	->where('user_id', '[\d]+');

// Process Form
Route::post('/user/process_form', 'UserController@processForm');
