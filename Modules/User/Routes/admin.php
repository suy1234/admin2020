<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('users')->group(function() {
	Route::get('/', 'UserController@index')->name('admin.users.index');
	Route::get('create', [
		'as' => 'admin.users.create',
		'uses' => 'UserController@create',
		// 'middleware' => 'can:admin.users.create',
	]);

	Route::post('user', [
		'as' => 'admin.users.store',
		'uses' => 'UserController@store',
		'middleware' => 'can:admin.users.create',
	]);

	Route::get('{id}/edit', [
		'as' => 'admin.users.edit',
		'uses' => 'UserController@edit',
		'middleware' => 'can:admin.users.edit',
	]);

	Route::put('{id}', [
		'as' => 'admin.users.update',
		'uses' => 'UserController@update',
		'middleware' => 'can:admin.users.edit',
	]);

	Route::delete('{ids?}', [
		'as' => 'admin.users.destroy',
		'uses' => 'UserController@destroy',
		'middleware' => 'can:admin.users.destroy',
	]);

	Route::get('{id}/show', [
		'as' => 'admin.users.show',
		'uses' => 'UserController@show',
		'middleware' => 'can:admin.users.show',
	]);

});

Route::prefix('role')->group(function() {
	Route::get('/', 'RoleController@index')->name('admin.roles.index');
	Route::get('create', [
		'as' => 'admin.roles.create',
		'uses' => 'RoleController@create',
		// 'middleware' => 'can:admin.roles.create',
	]);

	Route::post('roles', [
		'as' => 'admin.roles.store',
		'uses' => 'RoleController@store',
		'middleware' => 'can:admin.roles.create',
	]);

	Route::get('{id}/edit', [
		'as' => 'admin.roles.edit',
		'uses' => 'RoleController@edit',
		'middleware' => 'can:admin.roles.edit',
	]);

	Route::put('{id}', [
		'as' => 'admin.roles.update',
		'uses' => 'RoleController@update',
		'middleware' => 'can:admin.roles.edit',
	]);

	Route::delete('{ids?}', [
		'as' => 'admin.roles.destroy',
		'uses' => 'RoleController@destroy',
		'middleware' => 'can:admin.roles.destroy',
	]);

	Route::get('{id}/show', [
		'as' => 'admin.roles.show',
		'uses' => 'RoleController@show',
		'middleware' => 'can:admin.roles.show',
	]);

});


Route::prefix('employees')->group(function() {
	Route::get('/', 'EmployeeController@index');
});
