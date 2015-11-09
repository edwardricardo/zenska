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

Route::get('/', function(){
	return view("welcome");
});

Route::get('main', ['as' => 'main', 'uses' => 'MainController@getIndex']);

// Authentication routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' => 'post_login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('register', ['as' => 'post_register', 'uses' => 'Auth\AuthController@postRegister']);

// Password reset link request routes...
Route::get('password_request', ['as' => 'password_request', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password_request', ['as' => 'post_password_request', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password_reset/{token}', ['as' => 'password_reset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password_reset', ['as' => 'post_password_reset', 'uses' => 'Auth\PasswordController@postReset']);

// Maintenance routes...
Route::get('maintenance', ['as' => 'maintenance', 'uses' => 'MaintenanceController@getIndex']);

Route::resource('clients', 'ClientController');
Route::resource('employees', 'EmployeeController');
Route::resource('providers', 'ProductProviderController');

// Products routes...
Route::get('products', ['as' => 'products.index', 'uses' => 'ProductController@index']);
Route::get('products/hairdressing', ['as' => 'products.hairdressing', 'uses' => 'ProductController@getHairdressing']);
Route::get('products/handsfeetcare', ['as' => 'products.handsfeetcare', 'uses' => 'ProductController@getHandsfeetcare']);
Route::get('products/barbershop', ['as' => 'products.barbershop', 'uses' => 'ProductController@getBarbershop']);
Route::get('products/food', ['as' => 'products.food', 'uses' => 'ProductController@getFood']);
Route::get('products/others', ['as' => 'products.others', 'uses' => 'ProductController@getOthers']);
Route::get('products/{id}/edit', ['as' => 'products.edit', 'uses' => 'ProductController@edit']);
Route::get('products/create/{section}/{label}', ['as' => 'products.create', 'uses' => 'ProductController@create']);
Route::post('products', ['as' => 'products.store', 'uses' => 'ProductController@store']);