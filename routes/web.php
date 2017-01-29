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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin'], function() {

	Route::group(['middleware' => 'guest'], function() {
		Route::get('/signin', 'Admins\AdminController@getSignin')->name('AdminGetSignin');
		Route::post('/signin', 'Admins\AdminController@postSignin')->name('AdminPostSignin');
		Route::get('/signup', 'Admins\AdminController@getSignup')->name('AdminGetSignup');
		Route::post('/signup', 'Admins\AdminController@postSignup')->name('AdminPostSignup');
	});

	Route::group(['middleware' => 'auth'], function() {
		Route::get('/logout', 'Admins\AdminController@getLogout')->name('AdminGetLogout');
		Route::get('/home', 'Admins\AdminController@getHome')->name('AdminGetHome');
	});

});