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

Route::get('/admin/signin', 'Admins\AdminController@getSignin')->name('AdminGetSignin');

Route::post('/admin/signin', 'Admins\AdminController@postSignin')->name('AdminPostSignin');

Route::get('/admin/signup', 'Admins\AdminController@getSignup')->name('AdminGetSignup');

Route::post('/admin/signup', 'Admins\AdminController@postSignup')->name('AdminPostSignup');
