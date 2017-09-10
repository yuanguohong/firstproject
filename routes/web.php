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
//2017-07-25T15:21:51.631746Z 1 [Note] A temporary password is generated for root@localhost: j<lXu;K?L2id

//If you lose this password, please consult the section How to Reset the Root Password in the MySQL reference manual.

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



// 后台管理

Route::group(['prefix' => 'admin'] , function (){

    //登录
    Route::get('/login', 'Auth\LoginController@index');
    Route::post('/activeLogin', 'Auth\LoginController@activeLogin');

    //主页
    Route::get('/' , 'Admin\adminController@index');

    //
});

// webhooks 自动部署
Route::get('/webhooks' , 'webhooksController@index');




