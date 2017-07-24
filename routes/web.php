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

//Route::get('/', function () {
//	return view('welcome');
//});
Route::get('/ygh', function () {
	return view('welcome');
});
Route::get('/', 'helloController@index');
Route::get('/main', 'helloController@main');
Route::get('/ceshi', 'helloController@ceshi');
Route::get('/sendemail', 'helloController@sendEmail');
Route::get('/login', 'Auth\LoginController@index');
Route::post('/activeLogin', 'Auth\LoginController@activeLogin');


// 后台管理
Route::get('/admin' , 'Admin\adminController@index');




