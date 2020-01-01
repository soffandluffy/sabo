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

Route::get('/', 'Frontend\HomeController@index')->name('frontend.dashboard');
Route::get('/testman', 'Frontend\HomeController@testman');

Auth::routes();

Route::get('/home', 'Frontend\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){

	// Prefix Admin
	Route::prefix('admin')->group(function(){

		Route::get('/', 'Admin\DashboardController@dashboard')->name('dashboard');

		Route::prefix('user')->group(function(){

			Route::get('/', 'Admin\UserController@index')->name('user.index');
			Route::post('add', 'Admin\UserController@add')->name('user.add');
			Route::post('update/{id}', 'Admin\UserController@update')->name('user.update');
			Route::post('delete/{id}', 'Admin\UserController@delete')->name('user.delete');

		});

		Route::prefix('menu')->group(function(){

			Route::get('/', 'Admin\MenuController@index')->name('menu.index');
			Route::post('add', 'Admin\MenuController@add')->name('menu.add');
			Route::post('update/{id}', 'Admin\MenuController@update')->name('menu.update');
			Route::post('delete/{id}', 'Admin\MenuController@delete')->name('menu.delete');

			Route::get('submenu/{parent_id}', 'Admin\MenuController@submenu')->name('menu.submenu');
			Route::post('addsubmenu', 'Admin\MenuController@addsubmenu')->name('menu.addsubmenu');

		});

		Route::prefix('blog')->group(function(){

			Route::get('/', 'Admin\BlogController@index')->name('blog.index');
			Route::get('/add', 'Admin\BlogController@add')->name('blog.add');

		});

	});
	// END Prefix Admin

});

// START Android REST LARAVEL API
Route::prefix('saboapi')->group(function(){

	Route::get('getUser', 'Admin\UserController@getUser');
	Route::post('createUser', 'Admin\UserController@createUser');
	Route::post('updateUser/{id}', 'Admin\UserController@updateUser');
	Route::post('deleteUser{id}', 'Admin\UserController@deleteUser');

});
// END Android REST LARAVEL API


