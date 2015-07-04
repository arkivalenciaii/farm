<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'middleware' => 'auth',
	'uses' => 'UserController@index',
]);

// Route::get('employee/{id}/',[
// 	'middleware' => 'auth',
// 	'uses' => 'EmployeeController@index'
// ]);

// Route::get('employee/{id}/pay',[
// 	'middleware' => 'auth',
// 	'uses' => 'EmployeeController@pay'
// ]);

// Route::get('employee/{id}/{salary}',[
// 	'middleware' => 'auth',
// 	'uses' => 'EmployeeController@salary'
// ]);

Route::get('employee/{id}/',[
	'middleware' => 'auth',
	'uses' => 'EmployeeController@index'
]);

Route::get('employee/{id}/pay',[
	'middleware' => 'auth',
	'uses' => 'EmployeeController@pay'
]);

Route::get('employee/{id}/{salary}',[
	'middleware' => 'auth',
	'uses' => 'EmployeeController@salary'
]);