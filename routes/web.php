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


Route::get('socket', 'SocketController@index');
Route::post('sendmessage', 'SocketController@sendMessage');
Route::get('writemessage', 'SocketController@writemessage');
Auth::routes();

Route::get('/vue/write', function(){
	return view('vue-message.write');
});

Route::get('/vue/recive', function(){
	return view('vue-message.recive');
});

Route::get('/home', 'HomeController@index')->name('home');
